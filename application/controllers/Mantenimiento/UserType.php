<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserType extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("UserType_model");
    }

    public function index()
    {
        $data = array(
            'usertypesall' => $this->UserType_model->getAllUserTypes(),   
            'usertypesdeleted' => $this->UserType_model->getAllUserTypesDeleted(),              
        );
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/users/usertype/list', $data);
		$this->load->view('layouts/rightsidebar');
		$this->load->view('layouts/footer');
    }
}