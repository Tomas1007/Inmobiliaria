<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Inmueble_model");
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$rol_id = $this->session->userdata("rol");
	
		// Aplicar lógica de verificación de rol
		if ($rol_id == 2) {
			// Si el rol no es el esperado (por ejemplo, si no es 1), redirige o maneja el acceso no autorizado.
			redirect(base_url()); // Puedes redirigir a otra página o mostrar un mensaje de error, según tus necesidades.
		}
	}
	
	public function index()
	{
		$data  = array(
			'inmuebles' => $this->Inmueble_model->getInmueblesConImagenPortada(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/dashboard", $data);
		$this->load->view("layouts/footer");

	}

}
