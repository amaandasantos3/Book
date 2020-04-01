<?php

class Livros_model extends CI_Model {
    public function listaCategoria(){
        return $this->db->get("categoria")->result_array();
    }

}