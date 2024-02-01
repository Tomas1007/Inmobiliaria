<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/clases/ProductosBase.php';

class UserView extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
	}
	public function index()
	{
		
		$this->load->view("layouts/layout-user/header");
	
		$this->load->view("layouts/layout-user/footer");
	}
}