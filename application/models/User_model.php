<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getAllUsers()
    {
        $this->db->select('r.RoleName, u.*');
        $this->db->from('users u');
        $this->db->join('roles r','u.RoleId = r.RoleId');        
        $this->db->where('u.Deleted','0');
        $resultado = $this->db->get();
        return $resultado->result();
    }

    public function getAllRoles()
    {
        $this->db->select('r.RoleId, r.RoleName');
        $this->db->from('roles r');              
        $this->db->where('r.Deleted','0');
        $this->db->where('r.RoleId >','1');
        $resultado = $this->db->get();
        return $resultado->result();
    }

    public function getAllRenters()
    {
        $this->db->select('r.RoleName, u.*');
        $this->db->from('users u');
        $this->db->join('roles r','u.RoleId = r.RoleId');        
        $this->db->where("u.Deleted","0");
        $this->db->where("u.RoleId","3");
        $resultado = $this->db->get();
        return $resultado->result();
    }

    public function getAllFlexs()
    {
        $this->db->select('r.RoleName, u.*');
        $this->db->from('users u');
        $this->db->join('roles r','u.RoleId = r.RoleId');        
        $this->db->where('u.Deleted','0');
        $this->db->where('u.RoleId','4');
        $resultado = $this->db->get();
        return $resultado->result();
    }

    public function getAllVirtuals()
    {
        $this->db->select('r.RoleName, u.*');
        $this->db->from('users u');
        $this->db->join('roles r','u.RoleId = r.RoleId');        
        $this->db->where('u.Deleted','0');
        $this->db->where('u.RoleId','5');
        $resultado = $this->db->get();
        return $resultado->result();
    }
    
	public function login( $username, $password)
	{
        $this->db->where("username", $username);
        $this->db->where("Status", 'Activo');
        $this->db->where("Deleted", '0');
        $this->db->where("Password", $password);

        $resultado = $this->db->get("Users");
        if ($resultado->num_rows() > 0 )
        {
            return $resultado->row();
        }
        else 
        {
            return false;
        }
    }

    public function save($data)
    {
        return $this->db->insert('users',$data);
    }    
}
