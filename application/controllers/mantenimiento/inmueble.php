<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inmueble extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->library('session');
        $this->load->model("Inmueble_model");
		$this->load->model('Comentario_model');
		$this->load->model("Imagen_model");
    }
	public function index()
		{
			$userId = $this->session->userdata('id');
			$inmuebles = $this->Inmueble_model->getInmueblesIdUser($userId);
		$data  = array(
			'inmuebles' => $inmuebles,
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/inmuebles/list', $data);
		$this->load->view('layouts/footer');
	}
	public function inmuebleById($inmuebleId){
		 $this->input->cookie('inmueble_id');

		$data = array(
			'inmuebles'=> $this->Inmueble_model->getInmueble($inmuebleId),
			'comentarios'=> $this->Comentario_model->getComentariosByInmuebleId($inmuebleId),
			'imagenes'=> $this->Imagen_model->getImagesByInmuebleId($inmuebleId)
	);        		

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/inmuebles/inmuebleById", $data);
		$this->load->view("layouts/footer");
	}


	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/inmuebles/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$userId = $this->session->userdata('id');

		$titulo = $this->input->post("titulo");
		$descripcion = $this->input->post("descripcion");
		$fecha = $this->input->post("fecha");
		$precio = $this->input->post("precio");
		$ubicacion = $this->input->post("ubicacion");
		$parrilla = $this->input->post("parrilla") ? 1 : 0; // 1 si está marcado, 0 si no
		$pileta = $this->input->post("pileta") ? 1 : 0;
		//$parrilla = $this->input->post("parrilla");
		//$pileta = $this->input->post("pileta");

		$data  = array(
            'titulo'=>$titulo,
			'descripcion'=>$descripcion,
			"fecha_creacion"=> $fecha,
			"user_id" => $userId,
			"precio" => $precio,
			"ubicacion" => $ubicacion,
			"parrilla" => $parrilla,
			"pileta" => $pileta, 
			"estado" => "1"

		);
		$inmuebleId = $this->Inmueble_model->save($data);
			$cookie = array(
				'name'   => 'inmueble_id',
				'value'  => $inmuebleId,
				"expire" => 3600,
			);
			$this->input->set_cookie($cookie);

		redirect("mantenimiento/imagenes/cargaImagenes/");
	
	}

	public function edit($id){
		$data  = array(
			'inmueble' => $this->Inmueble_model->getInmueble($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/inmuebles/edit", $data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idInmueble = $this->input->post("id");
        $titulo = $this->input->post("titulo");
		$descripcion = $this->input->post("descripcion");
		$precio = $this->input->post("precio");
		$ubicacion = $this->input->post("ubicacion");

		$inmuebleActual = $this->Inmueble_model->getInmueble($idInmueble);

		$data = array(
            'titulo' => $titulo, 
			'descripcion'=> $descripcion,
			'precio' => $precio,
			'ubicacion' => $ubicacion
		);

		if ($this->Inmueble_model->update($idInmueble, $data)) {
			redirect(base_url()."mantenimiento/inmueble");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/inmueble/edit/".$idInmueble);
		}
	}

	public function delete($id){
        $data  = array(
            'estado' => "0", 
        );
        $this->Inmueble_model->update($id,$data);
        echo "mantenimiento/inmueble";
    }

}
