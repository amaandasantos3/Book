<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('caduser.php');
    }
    
    public function novo()
    {
        $user = array(
           "nome" => $this->input->post("nome"),
           "email" => $this->input->post("email"),
           "senha" => md5($this->input->post("senha"))
        );

        $this->load->model("users_model");
        $this->users_model->salva($user);
        $this->load->view('index');
    }

    public function login()
    {

        $this->load->model("users_model");
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $user = $this->users_model->login($email, $senha);

        if($user){
            $this->session->set_userdata("logged_user", $user);
            redirect("livro/index");
        }else {
            redirect("user/index");
        }
    }

    public function logout()
    {
        $this->session->unset_userdata("logged_user");
        redirect("user/index");
    }
}
