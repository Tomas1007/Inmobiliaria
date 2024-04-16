<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImagenPortada extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->library('session');
        $this->load->model("PortadaImg_model");
    }

    public function cargaPortada(){
        
        $this->load->view("layouts/layout-user/headerr");
        $this->load->view("layouts/layout-user/asidee");
        $this->load->view("admin/inmuebles/imagenPortada");
        $this->load->view("layouts/layout-user/footerr");
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
                redirect(base_url().'dashboard');
            } else {
                echo "no se pudo subir la portada";
            }
        }
    }
    
}