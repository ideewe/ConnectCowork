<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getAllUsers()
    {
        $this->db->where("Deleted","0");
        $resultado = $this->db->get("users");
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
}
