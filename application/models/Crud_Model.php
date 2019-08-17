<?php

//extend from this model to execute basic db operations
class Crud_model extends CI_Model {

    private $table;
    private $logActivity = false;
    private $LogType = "";
    private $logFor = "";
    private $logForKey = "";
    private $logFor2 = "";
    private $logForKey2 = "";

    function __construct($table = null) {
        $this->UseTable($table);
    }

    protected function UseTable($table) {
        $this->table = $table;
    }

    protected function init_activity_log($LogType = "", $LogTypeTitleKey = "", $LogFor = "", $LogForKey = 0, $LogFor2 = "", $LogForKey2 = 0) {
        if ($LogType) {
            $this->log_activity = true;
            $this->LogType = $LogType;
            $this->LogTypeTitleKey = $LogTypeTitleKey;
            $this->LogFor = $LogFor;
            $this->LogForKey = $LogForKey;
            $this->LogFor2 = $LogFor2;
            $this->LogForKey2 = $LogForKey2;
        }
    }

    function get_one($id = 0) {
        return $this->get_one_where(array('id' => $id));
    }

    function get_one_where($where = array()) {
        $result = $this->db->get_where($this->table, $where, 1);
        if ($result->num_rows()) {
            return $result->row();
        } else {
            $db_fields = $this->db->list_fields($this->table);
            $fields = new stdClass();
            foreach ($db_fields as $field) {
                $fields->$field = "";
            }
            return $fields;
        }
    }

    function get_all($include_deleted = false) {
        $where = array("deleted" => 0);
        if (!$include_deleted) {
            $where = array();
        }
        return $this->get_all_where($where);
    }

    function get_all_where($where = array(), $limit = 1000000, $offset = 0) {
        $where_in = get_array_value($where, "where_in");
        if ($where_in) {
            foreach ($where_in as $key => $value) {
                $this->db->where_in($key, $value);
            }
            unset($where["where_in"]);
        }
        return $this->db->get_where($this->table, $where, $limit, $offset);
    }

    function save(&$data = array(), $id = 0) {
        if ($id) {
            //update
            $where = array("id" => $id);

            //Para registrar una actividad tenemos que conocer los cambios. ahora recopile los datos antes de actualizar cualquier cosa
            if ($this->log_activity) {
                $data_before_update = $this->get_one($id);
            }

            $success = $this->update_where($data, $where);
            if ($success) {
                if ($this->log_activity) {
                    //to log this activity, check the changes
                    $fields_changed = array();
                    foreach ($data as $field => $value) {
                        if ($data_before_update->$field != $value) {
                            $fields_changed[$field] = array("from" => $data_before_update->$field, "to" => $value);
                        }
                    }
                    //has changes? log the changes.
                    if (count($fields_changed)) {
                        $LogForId = 0;
                        if ($this->LogForKey) {
                            $LogForKey = $this->LogForKey;
                            $LogForId = $data_before_update->$LogForKey;
                        }

                        $LogForId2 = 0;
                        if ($this->LogForKey2) {
                            $LogForKey2 = $this->LogForKey2;
                            $LogForId2 = $data_before_update->$LogForKey2;
                        }

                        $LogTypeTitleKey = $this->LogTypeTitleKey;
                        $LogTypeTitle = isset($data_before_update->$LogTypeTitleKey) ? $data_before_update->$LogTypeTitleKey : "";

                        $log_data = array(
                            "Action" => "updated",
                            "LogType" => $this->LogType,
                            "LogTypeTitle" => $LogTypeTitle,
                            "LogTypeId" => $id,
                            "Changes" => serialize($fields_changed),
                            "LogFor" => $this->LogFor,
                            "LogForId" => $LogForId,
                            "LogFor2" => $this->LogFor2,
                            "LogForId2" => $LogForId2,
                        );
                        $this->Activity_logs_model->save($log_data);
                        $activity_log_id = $this->db->insert_id();
                        $data["activity_log_id"] = $activity_log_id;
                    }
                }
            }
            return $success;
        } else {
            //insert
            if ($this->db->insert($this->table, $data)) {
                $insert_id = $this->db->insert_id();
                if ($this->log_activity) {
                    //log this activity
                    $LogForId = 0;
                    if ($this->LogForKey) {
                        $LogForId = get_array_value($data, $this->LogForKey);
                    }

                    $LogForId2 = 0;
                    if ($this->LogForKey2) {
                        $LogForId2 = get_array_value($data, $this->LogForKey2);
                    }

                    $LogTypeTitle = get_array_value($data, $this->LogTypeTitleKey);
                    $log_data = array(
                        "action" => "created",
                        "LogType" => $this->LogType,
                        "LogTypeTitle" => $LogTypeTitle ? $LogTypeTitle : "",
                        "LogType_id" => $insert_id,
                        "LogFor" => $this->LogFor,
                        "LogForId" => $LogForId,
                        "LogFor2" => $this->LogFor2,
                        "LogForId2" => $LogForId2,
                    );
                    $this->Activity_logs_model->save($log_data);
                    $activity_log_id = $this->db->insert_id();
                    $data["activity_log_id"] = $activity_log_id;
                }
                return $insert_id;
            }
        }
    }

    function update_where($data = array(), $where = array()) {
        if (count($where)) {
            if ($this->db->update($this->table, $data, $where)) {
                $id = get_array_value($where, "id");
                if ($id) {
                    return $id;
                } else {
                    return true;
                }
            }
        }
    }

    function delete($id = 0, $undo = false) {
        $data = array('deleted' => 1);
        if ($undo === true) {
            $data = array('deleted' => 0);
        }
        $this->db->where("id", $id);
        $success = $this->db->update($this->table, $data);
        if ($success) {
            if ($this->log_activity) {
                if ($undo) {
                    // remove previous deleted log.
                    $this->Activity_logs_model->delete_where(array("action" => "deleted", "LogType" => $this->LogType, "LogType_id" => $id));
                } else {
                    //to log this activity check the title
                    $model_info = $this->get_one($id);
                    $LogForId = 0;
                    if ($this->LogForKey) {
                        $LogForKey = $this->LogForKey;
                        $LogForId = $model_info->$LogForKey;
                    }
                    $LogTypeTitleKey = $this->LogTypeTitleKey;
                    $LogTypeTitle = $model_info->$LogTypeTitleKey;
                    $log_data = array(
                        "action" => "deleted",
                        "LogType" => $this->LogType,
                        "LogTypeTitle" => $LogTypeTitle ? $LogTypeTitle : "",
                        "LogType_id" => $id,
                        "LogFor" => $this->LogFor,
                        "LogForId" => $LogForId,
                    );
                    $this->Activity_logs_model->save($log_data);
                }
            }
        }
        return $success;
    }

    function get_dropdown_list($option_fields = array(), $key = "id", $where = array()) {
        $where["deleted"] = 0;
        $list_data = $this->get_all_where($where)->result();
        $result = array();
        foreach ($list_data as $data) {
            $text = "";
            foreach ($option_fields as $option) {
                $text.=$data->$option . " ";
            }
            $result[$data->$key] = $text;
        }
        return $result;
    }

    //prepare a query string to get custom fields like as a normal field
    protected function prepare_custom_field_query_string($related_to, $custom_fields, $related_to_table) {

        $join_string = "";
        $select_string = "";
        $custom_field_values_table = $this->db->dbprefix('custom_field_values');


        if ($related_to && $custom_fields) {
            foreach ($custom_fields as $cf) {
                $cf_id = $cf->id;
                $virtual_table = "cfvt_$cf_id"; //custom field values virtual table

                $select_string.=" , $virtual_table.value AS cfv_$cf_id ";
                $join_string .= " LEFT JOIN $custom_field_values_table AS $virtual_table ON $virtual_table.related_to_type='$related_to' AND $virtual_table.related_to_id=$related_to_table.id AND $virtual_table.deleted=0 AND $virtual_table.custom_field_id=$cf_id ";
            }
        }

        return array("select_string" => $select_string, "join_string" => $join_string);
    }

}
