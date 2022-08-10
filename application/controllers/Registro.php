<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu'));
		$this->load->database();
		$this->load->model('Users');
		$this->load->library(array('form_validation'));
	}

	public function index()
	{
		$data['menu'] = main_menu();
		$this->load->view('registro',$data);
		$query = $this->db->get('usuarios');
		// Validamos que el controlador este funcionla
		// var_dump($query->result());   
	}

	public function create(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$password_confirm = $this->input->post('password_confirm');
		
		$config = array(
			array(
							'field' => 'username',
							'label' => 'Nombre de Usuario',
							'rules' => 'required|alpha_numeric'
			),
			array(
							'field' => 'email',
							'label' => 'Correo',
							'rules' => 'required|valid_email',
							'errors' => array(
											'required' => 'El %s es invalido .',
							),
			),
);

$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == FALSE)
                {
									$data['menu'] = main_menu();
                  $this->load->view('registro',$data);
                }
                else
                {
									$datos = array(
										'nombre_usuario' => $username,
										'correo' => $email,
										'contrasena' => $password,
									);
									// $this->Users->create($username, $email, $password, $password_confirm);
									$data['menu'] = main_menu();
									if(!$this->Users->create($datos)){
										$data['msg'] = 'Ocurrio un error al inggresar los datos.';
										$this->load->view('registro',$data);
									}
									$data['msg'] = 'Registrado Correctamente!';
										$this->load->view('registro',$data);
                }
	}
}
