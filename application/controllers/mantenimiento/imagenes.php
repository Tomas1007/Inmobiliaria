<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagenes extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
		$this->load->library('session');
        $this->load->model("Imagen_model");
    }

    public function cargaImagenes(){
        
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/inmuebles/imagenes");
        $this->load->view("layouts/footer");
    }
   
   public function subirImagenes() {
        $inmuebleId = $this->input->cookie('inmueble_id');
    
        $config['upload_path'] = './assets/images/uploads';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
       // $config['max_size'] = 2048;
    
        $this->load->library('upload', $config);
    
        $imagen_data = array();
    
        // Procesar cada imagen en un bucle
        if (!empty($_FILES['imagenes']['name'][0])) {
            foreach ($_FILES['imagenes']['name'] as $key => $image_name) {
                $_FILES['imagen']['name'] = $_FILES['imagenes']['name'][$key];
                $_FILES['imagen']['type'] = $_FILES['imagenes']['type'][$key];
                $_FILES['imagen']['tmp_name'] = $_FILES['imagenes']['tmp_name'][$key];
                $_FILES['imagen']['error'] = $_FILES['imagenes']['error'][$key];
                $_FILES['imagen']['size'] = $_FILES['imagenes']['size'][$key];
    
                if ($this->upload->do_upload('imagen')) {
                    $data = $this->upload->data();
                    $fileName = $data['file_name']; // Nombre del archivo subido
    
                    // Agregar la información de la imagen al arreglo de datos
                    $imagen_data[] = array(
                        'nombre' => $fileName,
                        'inmueble_id' => $inmuebleId
                    );
                }
            }
        }
    
        // Guarda las imagenes en la base de datos
        if (!empty($imagen_data)) {
            $this->Imagen_model->saveImagesBatch($imagen_data);
        }
        redirect('mantenimiento/imagenPortada/cargaPortada/');
    
    }

}