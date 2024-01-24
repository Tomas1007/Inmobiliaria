<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Comentario_model');
    }

    public function guardarComentario($inmuebleId) {
       
                $userId = $this->session->userdata('id');
                $contenido = $this->input->post('contenido');
            
                $data = array(
                    'contenido' => $contenido,
                    'fecha_creacion' => date('Y-m-d H:i:s') ,
                    'inmueble_id' => $inmuebleId,
                    'user_id' => $userId
                );
                               
               if($this->Comentario_model->saveComentario($data));

                
                redirect(base_url());
            }
    public function eliminarComentario(){
        $idComentario = $this->input->post('comentario_id');
        $this->Comentario_model->deleteComentarioById($idComentario);
        redirect(base_url());
    }
    
}

    
