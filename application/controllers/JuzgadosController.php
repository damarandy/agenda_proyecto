<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datos extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// Es importante agregar el form en el helper, ya que utilizaremos un formulario para el envio de los datos atravez del metodo POST.
		$this->load->helper(array('form','url'));
		$this->load->database();
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$info["titulo"] = "Registra datos";
		$this->load->view('paginas/nuevomovimientos',$info);
	}

	public function registrar()
	{
		// Oteniendo el POST de los datos
		$materia = $this->input->post("materia");
		$juzgado= $this->input->post("juzgado");
		$provincia = $this->input->post("provincia");
		$nivel = $this->input->post("nivel");
		$mes = $this->input->post("mes");
		$ano = $this->input->post("ano");
		$tipomovi = $this->input->post("tipomovi");

		$resultado = $this->datosModel->registro($materia,$juzgado,$provincia,$nivel,$mes,$ano,$tipomovi);

		if ($resultado){
			redirect("paginas/index.php");
		}else{
			$this->index();
		}
	}
}
