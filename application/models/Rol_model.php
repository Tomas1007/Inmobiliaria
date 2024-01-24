<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rol_model extends CI_Model {

	public function crearUserRol($data){
		return $this->db->insert("users_rol",$data);
	}
}