<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Cliente_model");
	}

	public function index()
	{
		$data  = array(
			'cliente' => $this->Cliente_model->getClientes(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/clientes/list",$data);
		$this->load->view("layouts/footer");

	}
	public function add(){


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/clientes/add");
		$this->load->view("layouts/footer");
	}
	public function store(){

		$nombre = $this->input->post("nombreCliente");
        $apellido = $this->input->post("apellidoCliente");
		$direccion = $this->input->post("direccion");
		$telefono = $this->input->post("telefono");
		$DNI= $this->input->post("DNI");


			$data  = array(
				'nombreCliente' => $nombre, 
                'apellidoCliente' => $apellido,
                'DNI' => $DNI,
				'direccion' => $direccion,
				'telefono' => $telefono,
				'estado' => "1"
			);

			if ($this->Cliente_model->save($data)) {
				redirect(base_url()."mantenimiento/clientes");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/clientes/add");
			}
		
	}
	public function edit($id){
		$data  = array(
			'cliente' => $this->Cliente_model->getCliente($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/clientes/edit",$data);
		$this->load->view("layouts/footer");
	}


	public function update(){
		$idcliente = $this->input->post("idcliente");
		$nombre = $this->input->post("nombreCliente");
		$apellido = $this->input->post("apellidoCliente");
		$direccion = $this->input->post("direccion");
		$telefono = $this->input->post("telefono");
		$DNI = $this->input->post("DNI");

		$clienteActual = $this->Cliente_model->getCliente($idcliente);

		if ($DNI == $clienteActual->DNI) {
			$is_unique = "";
		}else{
			$is_unique= '|is_unique[cliente.DNI]';
		}



			$data = array(
				'nombreCliente' => $nombre, 
                'apellidoCliente' => $apellido,
                'DNI' => $DNI,
				'direccion' => $direccion,
				'telefono' => $telefono,
				'estado' => "1"
			);

			if ($this->Cliente_model->update($idcliente,$data)) {
				redirect(base_url()."mantenimiento/clientes");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."mantenimiento/clientes/edit/".$idcliente);
			}
		

	}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Cliente_model->update($id,$data);
		echo "mantenimiento/clientes";
	}
}