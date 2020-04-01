<?php

class Users_model extends CI_Model {
    public function listaUser(){
        return $this->db->get("user")->result_array();
    }

    public function salva($user){
        $this->db->insert("user", $user);
    }

    public function login($email, $senha){
         $this->db->where("email", $email);
         $this->db->where("senha", $senha);
         $user = $this->db->get("user")->row_array();
         return $user;
    }

    
}