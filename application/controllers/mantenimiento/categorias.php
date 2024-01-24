<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model("Categoria_model");
    }

	public function index()
	{
		$data  = array(
			'categoria' => $this->Categoria_model->getCategorias(), 
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categorias/list', $data);
		$this->load->view('layouts/footer');
	}
	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/categorias/add");
		$this->load->view("layouts/footer");
	}
	public function store(){
		$nombre_cat = $this->input->post("nombre_cat");
		$data  = array(
			'nombre_cat' => $nombre_cat, 
			'estado' => "1"
		);
		if ($this->Categoria_model->save($data)) {
			redirect(base_url()."mantenimiento/categorias");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/categorias/add");
		}
	}
	public function edit($id){
		$data  = array(
			'categoria' => $this->Categoria_model->getCategoria($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/categorias/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idCategoria = $this->input->post("idCategoria");
		$nombre_cat = $this->input->post("nombre_cat");

		$categoriaactual = $this->Categoria_model->getCategoria($idCategoria);


			$data = array(
				'nombre_cat' => $nombre_cat, 
			);

			if ($this->Categoria_model->update($idCategoria,$data)) {
				redirect(base_url()."mantenimiento/categorias");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."mantenimiento/categorias/edit/".$idCategoria);
			}

		
	}

}
