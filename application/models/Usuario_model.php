<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function getUsuarios(){
     $query = $this->db->get('admin');
     return $query->result();
 }
 
 public function salvar($dados=NULL){
    if($dados['id']==NULL){
        $dados['id']='default';
        $this->db->insert('admin',$dados);
        return 1;
    }else{
            //Ou seja, se houver id, é preciso atualizar o registro.
      $this->db->where('id', $dados['id']);
      return $this->db->update('admin', $dados);
  }
}

public function remover($id=NULL)
{
    if($id==NULL)
        return 0;
    else{
        $this->db->where('id', $id);
        return $this->db->delete('admin');
    }
}
}
