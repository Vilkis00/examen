<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos extends CI_Controller {

  public function __construct(){
    parent::__construct();
    if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
    $this->load->helper(array('download','file','url','html','form'));
    $this->folder = 'rutaimg/';
    $this->load->model("Articulos_model");
  }

  public function index(){
    $data['articulos'] = $this->Articulos_model->leer();
    $this->load->view("layouts/header");
    $this->load->view("articulos/listado", $data);
    $this->load->view("layouts/footer");
  }

  public function frmGuardar(){
    $data['categorias'] = $this->Articulos_model->leerCategorias();
    $this->load->view("layouts/header");
    $this->load->view("articulos/frmGuardar", $data);
    $this->load->view("layouts/footer");
  }

  public function frmActualizar($codigo, $id, $categoria){
    $data['articulos'] = $this->Articulos_model->leerEspecifico($codigo);
    $data['categorias'] = $this->Articulos_model->leerCategorias();
    $data['id'] = $id;
    $data['categoria'] = $categoria;
    $this->load->view("layouts/header");
    $this->load->view("articulos/frmActualizar", $data);
    $this->load->view("layouts/footer");
  }

  public function guardar(){
    $config['upload_path']= $this->folder;
    $config['allowed_types']= 'png|jpg|jpeg';
    $config['remove_spaces']= TRUE;
    $config['max_size']= '2048';
    $this->load->library('upload',$config);
    if (!$this->upload->do_upload()) {
      $dato = $this->upload->display_errors();
      print_r($dato);
    }
    else {
      $file_info = $this->upload->data();
      $dato['categoria']= $this->input->post("categoria");
      $dato['descripcion']= $this->input->post("descripcion");
      $dato['precio']= $this->input->post("precio");
      $dato['imagen']= $file_info['file_name'];
      $this->Articulos_model->guardar($dato);
    }
    redirect(base_url()."articulos");
  }

  public function actualizar(){
    $config['upload_path']= $this->folder;
    $config['allowed_types']= 'png|jpg|jpeg';
    $config['remove_spaces']= TRUE;
    $config['max_size']= '2048';
    $this->load->library('upload',$config);
    if (!$this->upload->do_upload()) {
      $dato = $this->upload->display_errors();
      print_r($dato);
    }
    else {
      $file_info = $this->upload->data();
      $dato['codigo']= $this->input->post("codigo");
      $dato['categoria']= $this->input->post("categoria");
      $dato['descripcion']= $this->input->post("descripcion");
      $dato['precio']= $this->input->post("precio");
      $dato['imagen']= $file_info['file_name'];
      $this->Articulos_model->actualizar($dato);
    }
    redirect(base_url()."articulos");
  }

  public function eliminar($codigo, $ruta){
    $this->Articulos_model->eliminar($codigo);
    unlink($this->folder . $ruta);
    redirect(base_url()."articulos");
  }
}
?>
