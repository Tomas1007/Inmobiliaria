<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inmueble_model extends CI_Model {

	public function getInmuebles(){
		$query = $this->db->query("SELECT * FROM `inmuebles` WHERE estado = 1;");

		return $query->result();
	}
	public function getInmueblesByPileta(){
		$query = $this->db->query("SELECT * FROM `inmuebles` WHERE parrilla = 1 AND estado = 1;");

		return $query->result();
	}
	public function getInmueblesByParrilla(){
		$query = $this->db->query("SELECT * FROM `inmuebles` WHERE parrilla = 1 AND estado = 1;");

		return $query->result();
	}
	public function getInmueblesByParrillaAndPileta(){
		$query = $this->db->query("SELECT * FROM `inmuebles` WHERE parrilla = 1 AND pileta = 1 AND estado = 1;");

		return $query->result();
	}

	public function save($data){
		$this->db->insert("inmuebles",$data);
		return $this->db->insert_id();
	}
	public function getInmueble($inmuebleId){
		$query = $this->db->query("SELECT DISTINCT inmuebles.*, users.celular AS celularUser 
		FROM `inmuebles` 
		JOIN users ON inmuebles.user_id = users.id 
		WHERE inmuebles.id = $inmuebleId AND inmuebles.estado = 1");

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null; 
        }

	}
	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("inmuebles",$data);
	}
	public function getInmueblesIdUser($userId){
		$query = $this->db->query("SELECT * FROM `inmuebles` WHERE user_id = $userId AND estado = 1");

		if($query->num_rows() > 0){
			return $query-> result();
		}else{
			return array();
		}
	}
	public function getInmueblesConImagenPortada() {
		$query = $this->db->query("SELECT *, imagen_portada.nombre AS nombre_imagen_portada 
                           FROM inmuebles
                           JOIN imagen_portada ON inmuebles.id = imagen_portada.inmueble_id
						   WHERE estado = 1");

		if ($query->num_rows() > 0) {
   		 return $result = $query->result();
		} else {
}

}
}