<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentario_model extends CI_Model {

	public function saveComentario($data){
		$this->db->insert("comentarios",$data);
		return $this->db->insert_id();
	}

	public function getComentariosByInmuebleId($inmuebleId) {
        $query = $this->db->query("SELECT comentarios.*, users.nombre AS nombreUsuario
		FROM comentarios
		JOIN users ON comentarios.user_id = users.id
		WHERE comentarios.inmueble_id = $inmuebleId;
		");
        if($query->num_rows() > 0){
			return $query-> result();
		}else{
			return array();
		}
    }
	public function deleteComentarioById($idComentario) {
		$query = $this->db->query("DELETE FROM comentarios WHERE id = $idComentario");
		

}

}
