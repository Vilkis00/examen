<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Articulos_model extends CI_Model {

    public function leer(){
      $resultados = $this->db->get('articulos');
      return $resultados->result();
    }

    public function leerEspecifico($codigo){
      $this->db->where("codigo", $codigo);
      $resultado = $this->db->get("articulos");
      return $resultado->row();
    }

    public function guardar($data){
      return $this->db->insert("articulos", $data);
    }

    public function actualizar($data){
      $this->db->where("codigo", $data['codigo']);
      return $this->db->update("articulos", $data);
    }

    public function eliminar($codigo){
      $this->db->delete('articulos', array('codigo' => $codigo));
    }
  }

?>
