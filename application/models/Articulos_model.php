<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Articulos_model extends CI_Model {

    public function leer(){
      //$resultados = $this->db->query("SELECT a.codigo, c.id, c.descripcion AS categoria, a.descripcion, a.precio, a.imagen FROM articulos a, categorias c WHERE c.id = a.categoria");
      $this->db->select('a.codigo, c.id, c.descripcion AS categoria, a.descripcion, a.precio, a.imagen');
      $this->db->from('articulos a, categorias c');
      $this->db->where('c.id = a.categoria');
      $resultados = $this->db->get();
      return $resultados->result();
    }

    public function leerCategorias(){
      $resultados = $this->db->get('categorias');
      return $resultados->result();
    }

    public function leerEspecifico($codigo){
      //$resultados = $this->db->query("SELECT a.codigo, c.id, c.descripcion AS categoria, a.descripcion, a.precio, a.imagen FROM articulos a, categorias c WHERE c.id = a.categoria AND a.codigo = $codigo");
      $this->db->select('a.codigo, c.id, c.descripcion AS categoria, a.descripcion, a.precio, a.imagen');
      $this->db->from('articulos a, categorias c');
      $this->db->where('c.id = a.categoria');
      $this->db->where('a.codigo', $codigo);
      $resultados = $this->db->get();
      return $resultados->row();
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
