<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos extends CI_Controller {

  public function __construct(){
    parent::__construct();
    if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
    $this->load->model("Articulos_model");
  }

  public function index(){
    $data['articulos'] = $this->Articulos_model->leer();
    $this->load->view("layouts/header");
    $this->load->view("articulos/listado", $data);
    $this->load->view("layouts/footer");
  }

  public function frmGuardar(){
    $this->load->view("layouts/header");
    $this->load->view("articulos/frmGuardar");
    $this->load->view("layouts/footer");
  }

  public function frmActualizar($codigo){
    $data['articulos'] = $this->Articulos_model->leerEspecifico($codigo);
    $this->load->view("layouts/header");
    $this->load->view("articulos/frmActualizar", $data);
    $this->load->view("layouts/footer");
  }

  public function guardar(){
    $this->Articulos_model->guardar($_POST);
    redirect(base_url()."articulos");
  }

  public function actualizar(){
    $this->Articulos_model->actualizar($_POST);
    redirect(base_url()."articulos");
  }

  public function eliminar($codigo){
    $this->Articulos_model->eliminar($codigo);
    redirect(base_url()."articulos");
  }
}
?>
