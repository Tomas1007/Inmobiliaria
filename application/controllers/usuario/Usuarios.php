<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->library('session');
        $this->load->model("Users_model");
    }

	public function index()
	{
		$userId = $this->session->userdata('id');
		$users = $this->Users_model->getUser($userId);
		$data = array(
			'users' => $users
		);
		
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/list', $data);
		$this->load->view('layouts/footer');
	}
	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/add");
		$this->load->view("layouts/footer");
	}
	public function store(){
		$email = $this->input->post("email");
        $apellido = $this->input->post("apellido");
        $nombre = $this->input->post("nombre");
		$data  = array(
			'email' => $email, 
            'apellido'=>$apellido,
            'nombre'=>$nombre,
			'estado' => "1"
		);
		if ($this->Users_model->save($data)) {
			redirect(base_url()."mantenimiento/usuarios");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/usuarios/add");
		}
	}
	public function edit($id){
		
		$data = array(
			'user' => $this->Users_model->getUser($id),
		);
		
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/edit", $data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idUser = $this->input->post("id");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
		$email = $this->input->post("email");
		$celular = $this->input->post("celular");

		//$usuarioactual = $this->Users_model->getUser($idUser);


			$data = array(
				'nombre'=>$nombre,
                'apellido'=>$apellido,
                'email' => $email, 
				'celular' => $celular,
			);

			if ($this->Users_model->update($idUser,$data)) {
				redirect(base_url()."usuario/usuarios");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."usuario/usuarios/edit/".$idUser);
			}
	}
	public function delete($id){
        $data  = array(
            'estado' => "0", 
        );
        $this->Users_model->update($id,$data);
        redirect(base_url()."usuario/usuarios");
    }

}