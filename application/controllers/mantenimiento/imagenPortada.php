<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImagenPortada extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->library('session');
        $this->load->model("PortadaImg_model");
    }

    public function cargaPortada(){
        
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/inmuebles/imagenPortada");
        $this->load->view("layouts/footer");
    }
    
    public function subirPortada() {
        $inmuebleId = $this->input->cookie('inmueble_id');

        if (isset($inmuebleId)) {
            $config['upload_path'] = './assets/images/uploads/';
            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('portada')) {
                $data = $this->upload->data();
               
                $nombre = $data['file_name'];

                $this->PortadaImg_model->subirPortada($nombre, $inmuebleId);
                redirect("mantenimiento/inmueble/");
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
            }
        } else {
            
        }
    }
}