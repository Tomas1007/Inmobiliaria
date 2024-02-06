<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Users_model");
	}
	/*public function index()
	{
		if ($this->session->userdata("login")) {
			redirect(base_url()."dashboard");
		}
		else{
			$this->load->view("admin/login");
		}
	}*/
		

		public function index(){
			if ($this->session->userdata("login")) {
				$rol_id = $this->session->userdata("rol");

			if ($rol_id == 2) {
					redirect(base_url()."userview");
				} elseif ($rol_id == 1) {
					redirect(base_url()."dashboard");
				}
			} else {
				$this->load->view("admin/login");
			}
		}
		
	

	public function login(){
		$email = $this->input->post("email");
		$contrasenia = $this->input->post("contrasenia");
		$res = $this->Users_model->login($email, $contrasenia);
		//echo print_r("ingreso bien");

		if (!$res) {
			$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
			redirect(base_url());
		}
		else{
			$data  = array(
				'id' => $res->id, 
				'nombre' => $res->nombre,
				'rol' => $res->rol_user,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			if ($res->rol_user == 2) {
				redirect(base_url() . "userview");
			} elseif ($res->rol_user == 1) {
				redirect(base_url() . "dashboard");
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	/*ublic function register(){
		parent::__construct();

	}*/
}