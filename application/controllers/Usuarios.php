<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

  public function __construct(){
    parent::__construct();
    if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
    $this->load->model("Usuarios_model");
  }

  public function frmGuardar(){
    $this->load->view("layouts/header");
    $this->load->view("usuarios/frmGuardar");
    $this->load->view("layouts/footer");
  }

  public function guardar(){
    $username = $this->input->post("username");
		$password = $this->input->post("password");

    $data['username']= $username;
    $data['password']= sha1($password);
		$this->Usuarios_model->save($data);
    redirect(base_url()."articulos");
  }
}
?>
