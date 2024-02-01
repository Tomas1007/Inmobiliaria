s<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {


	public function login($email, $contrasenia){
		$resultados = $this->db->query("SELECT * FROM `users` WHERE email = '$email' AND estado = 1;");
		
		
		if ($resultados->num_rows() > 0) {
			$usuario = $resultados->row();
			if(password_verify($contrasenia, $usuario->contrasenia)){
				return $usuario;
			}
		}
		else{
			return false;
		}
	}

	public function register($data){
	
			$this->db->insert('users', $data);
			
			return $this->db->insert_id();
		
	}


	public function save($data){
		return $this->db->insert("users",$data);
	}

	public function getUser($id){
		$query = $this->db->query("SELECT * FROM `users` WHERE id = $id AND estado = 1;");
		if($query->num_rows() > 0){
			return $query-> result();
		}else{
			return null;
		}
	}
	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("users",$data);
	}
}