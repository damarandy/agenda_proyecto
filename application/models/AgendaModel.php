<?php

	class datosModel extends CI_Model{
		public function __construct()
		{
			$this->load->database();
		}

		//Datos a enviar la tabla de datos
		public function registro($materia,$juzgado,$provincia,$nivel,$mes,$ano,$tipomovi)
		{
			// Los datos se insertan a travez de un array.  El cual va seguido de la tabla donde se va a realizar el registro.
			return $this->datos->insert(
				"datos",[
					"materia" => $materia, 
					"juzgado" => $juzgado, 
					"provincia" => $provincia, 
					"nivel" => $nivel, 
					"mes" => $mes, 
					"ano" => $ano, 
					"tipomovi" => $tipomovi	
				]);
		}

	}
?>
