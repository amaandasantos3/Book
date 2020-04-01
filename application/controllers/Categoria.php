<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function index()
	{
        $this->load->model("categorias_model");
        $lista = $this->categorias_model->listaCategoria();
        $categorias = array("categorias" => $lista);
        $this->load->view('cadUser', $categorias);
    }

}
