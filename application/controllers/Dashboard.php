<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Inmueble_model");
		if (!$this->session->userdata("login")) {
			redirect(base_url());
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