<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu'));
		$this->load->library('form_validation');
		$this->load->helper(array('auth/login_rules'));
		$this->load->model('Auth');
	}

	public function index()
	{
		$data['menu'] = main_menu();
		$this->load->view('login',$data);
		$this->load->view('login');
	}

	public function validate(){
		$this->form_validation->set_error_delimiters('', '');
		$rules = getLoginRules();
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == FALSE){
			$errors = array(
				'email' => form_error('email'),
				'password' => form_error('password')
			);
			echo json_encode($errors);
			$this->output->set_status_header(400);
		}else{
			$usr = $this->input->post('email');
			$pass = $this->input->post('password');
			if(!$res = $this->Auth->login($usr, $pass)){
				
			}
			var_dump($res);
		}
	}

}
