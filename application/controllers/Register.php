<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model("Users_model");
		$this->load->model("Rol_model");

	}
	public function index()
    {
		$this->load->view("admin/register");
	}
    public function registrar() {
		$nombre = $this->input->post('nombre');
		$apellido = $this->input->post('apellido');
		$email = $this->input->post('email');
		$contrasenia = $this->input->post('contrasenia');
		$estado = 1;
		$rolId = 2;
	
		//$userId = $this->Users_model->register($nombre, $apellido, $email, $contrasenia);
		$data = array(
		
			'nombre' => $nombre,
			'apellido' => $apellido,
			'email' => $email,
			'contrasenia'=> password_hash($contrasenia, PASSWORD_BCRYPT),
			'estado'=> $estado,
			'rol_user'=> $rolId,
		);
		$res = $this->Users_model->register($data);
	//	$this->Rol_model->crearUserRol($data);

		if ($res) {
		
			redirect(base_url()."dashboard");
		} else {
			echo "No se pudo registrar, compruebe sus datos";
			
		}
	}

}
