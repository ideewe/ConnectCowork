<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
    }

    public function index()
    {
        $data = array(
            'users' => $this->User_model->getAllUsers(),
        );
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/users/list',$data);
		$this->load->view('layouts/rightsidebar');
		$this->load->view('layouts/footer');
        
    }

    public function add()
    {
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/users/add');
		$this->load->view('layouts/rightsidebar');
		$this->load->view('layouts/footer');   
    }
}