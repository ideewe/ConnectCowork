<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserType_model extends CI_Model {

    public function getAllUserTypes()
    {
        $this->db->select('ut.*');
        $this->db->from('usertypes ut');       
        $this->db->where('ut.Deleted','0');
        $resultado = $this->db->get();
        return $resultado->result();
    }

    public function getAllUserTypesDeleted()
    {
        $this->db->select('ut.*');
        $this->db->from('usertypes ut');       
        $this->db->where('ut.Deleted','1');
        $resultado = $this->db->get();
        return $resultado->result();
    }
}