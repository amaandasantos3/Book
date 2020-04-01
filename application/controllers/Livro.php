<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livro extends CI_Controller {

	public function index()
	{
        $this->load->model("livros_model");
        $lista = $this->livros_model->listaLivros();
        $livros = array("livros" => $lista);
        $this->load->view('index', $livros);
    }

    public function cadastro(){
        $this->load->view('cadlivro.php');
    }

    public function lista(){
        $this->load->model("livros_model");
        $lista = $this->livros_model->listaLivros();
        $livros = array("livros" => $lista);
        $this->load->view('adminlivro', $livros);
    }
    
    public function novo(){
        $livro = array(
           "nome" => $this->input->post("nome"),
           "autor" => $this->input->post("autor"),
           "categoria" => $this->input->post("categoria"),
           "resenha" => $this->input->post("resenha")
        );

        $this->load->model("livros_model");
        $this->livros_model->salva($livro);
        $this->load->view('index');
    }

     public function delete($id) {
       $this->load->model("livros_model");
       $this->livros_model->destroy($id);
       $this->load->view('livro/index');
    }

    public function edit($id){
       $this->load->model("livros_model");
       $data["livro"] = $this->livros_model->show($id);
       $data["title"] = "Editar Livros";

       $this->load->view('editlivro.php', $data);
    }

    public function update($id){
        $this->load->model("livros_model");
        $livro = $_POST;
        $this->livros_model->update($id, $livro);
        redirect("index");
    }


}
