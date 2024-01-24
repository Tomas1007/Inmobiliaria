<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

	public function getClientes(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("cliente");
		return $resultados->result();
	}

	public function getCliente($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("cliente");
		return $resultado->row();

	}
	public function save($data){
		return $this->db->insert("cliente",$data);
	}
	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("cliente",$data);
	}
}