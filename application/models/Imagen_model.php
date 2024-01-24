<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagen_model extends CI_Model {

    public function saveImagesBatch($imagen_data) {
        if (!empty($imagen_data) && is_array($imagen_data)) {
            $this->db->insert_batch('imagenes', $imagen_data);
        }
    }
   /* public function getImagenesByInmuebleId($inmuebleId) {
        $this->db->where('inmueble_id', $inmuebleId);
        $query = $this->db->get('imagenes');
        
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array(); 
        }
    }*/
    public function getImagesByInmuebleId($inmuebleId) {
		$query = $this->db->query("SELECT nombre FROM `imagenes` JOIN inmuebles 
                                    ON imagenes.inmueble_id = inmuebles.id 
                                    WHERE inmuebles.id = $inmuebleId");

		if ($query->num_rows() > 0) {
   		 return $result = $query->result();
		} else {
}

}
}