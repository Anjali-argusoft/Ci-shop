<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('register');
		$this->load->view('template/footer');
	}

	public function signup()
	{
		$username =  $this->input->post('uname');
		$fname =  $this->input->post('fname');
		$lname =  $this->input->post('lname');
		$email =  $this->input->post('email');
		$password =  $this->input->post('pwd');
		$mobile =  $this->input->post('mobile');

		$this->form_validation->set_rules('uname', 'User Name', 'required|is_unique[user.USERNAME]');
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.EMAIL]');
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required');

		if($this->form_validation->run() == FALSE){
			$this->index();
		} else {
			$data = [
                'USERNAME' => $username,
                'FIRSTNAME' => $fname,
				'LASTNAME' => $lname,
				'EMAIL' => $email,
				'PASSWORD' => md5($password),
				'MOBILE' => $mobile,
				'IP' => $this->input->ip_address()
            ];
            $this->load->model('register_model');
            $insert_id = $this->register_model->insertUser($data);
           if($insert_id){
			$this->session->set_flashdata('SignupSuccess', 'You have successfully Registered, Please login!');
			$this->index();
		   }
		}
	}
}
