<?php

class Users extends CI_Model{

	public function __construct() {
		// Llamamos la conexion a la base de datos.
		$this->load->database();
	}

	public function create($datos){
		$datos = array(
			'nombre_usuario' => $datos['nombre_usuario'],
			'correo' => $datos['correo'],
			'contrasena' => $datos['contrasena'],
			'status' => 1,
			'rango'	 => 2,
		);

		if(!$this->db->insert('usuarios', $datos)){
			return false;
		}

	return true;

// Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
	}
}
