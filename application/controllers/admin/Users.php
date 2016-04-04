<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
	    // Your own constructor code
	    $this->load->model('user');
	}

	public function index()
	{
		if ($this->session->userdata('is_logged_in')) {
          redirect('admin/main', 'refresh');
      	}

		$this->load->view('admin/users/login');
	}
	
	public function login()
   	{
		if ($this->session->userdata('is_logged_in')) {
          redirect('admin/main', 'refresh');
      	} 

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|trim|callback_checking_validate');
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim|min_length[4]');

		if( $this->form_validation->run() == false )
		{
			$this->index();
		} else {
			$session_user = array(
				'email'				=> $this->input->post('email'),
				'is_logged_in'		=> 1
			);
			$this->session->set_userdata($session_user);
			redirect('admin/main', 'refresh');
		}
    }
    public function checking_validate()
    {
		if ($this->session->userdata('is_logged_in')) {
          redirect('admin/main', 'refresh');
      	}

    	if($this->user->is_logged_in())
    	{
    		return true;
    	} 
    	else {
    		$this->form_validation->set_message('checking_validate', 'Incorrect email and password');
    		return false;
    	}
    }
	
	public function logout() 
	{
		$this->session->sess_destroy();
		redirect('admin', 'refresh');
	}
}
