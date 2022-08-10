<?php
class nuevojuzgados extends CI_Controller {

     public function __construct(){
     parent::__construct();
     $this->load->helper('url');
     $this->load->database();
    //$this->load->library('Grocery_CRUD');
   }

     public function index(){
     $this ->load ->view ('plantilla/encabezado');
     $this->load->view('paginas/nuevomovimientos');
    //$this->load->view('paginas/salidadeopcion');
    $this ->load ->view ('plantilla/piee');
    //Se debe traer los valores capturados
    //para enviarlos a la bd
   // $this->load->model('Modelo_Conectar');
    
     
       
   }
   public function tipomovi(){
     $this ->load ->view ('plantilla/encabezado1');
     $this->load->view('paginas/movi_datos');
     $this ->load ->view ('plantilla/piee');

   }
    
  public function datos(){
     $this ->load ->view ('plantilla/encabezado2');
     $this->load->view('paginas/datos_captados');
     $this ->load ->view ('plantilla/piee');

   }

}


?>
?> 


