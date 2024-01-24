<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PortadaImg_model extends CI_Model {

    public function subirPortada($nombre, $idInmueble){    
        $data = array(
            'nombre' => $nombre,
            'inmueble_id' => $idInmueble
        );

        $this->db->insert('imagen_portada', $data); 

    }
}