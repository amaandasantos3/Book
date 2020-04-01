<?php

class Livros_model extends CI_Model {
    public function listaLivros(){
        return $this->db->get("book")->result_array();
    }

    public function salva($livro){
        $this->db->insert("book", $livro);
    }

    public function update($id, $livro){
        $this->db->where("id", $id);
        return $this->db->update("book", $livro);
    }

   public function destroy($id) {
        $this->db->where("id", $id);
        return $this->db->delete("book");
    }

    public function show($id){
        return $this->db->get_where("book", array(
           "id" => $id 
        ))->row_array();
    }
}