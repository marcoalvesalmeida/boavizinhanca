<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensagem_model extends CI_Model {

	public function getMensagens(){
            $this->db->from('mensagem');
            $this->db->order_by("data_hora", "desc");
           $query = $this->db->get();
           return $query->result();
	}
        
    public function salvar($dados=NULL){
        if($dados!=NULL){
            $this->db->insert('mensagem',$dados);
            return 1;
        }else{
            return 0;
        }
    }

    public function remover($id=NULL){
        if($id==NULL)
            return 0;
        else{
            $this->db->where('id', $id);
            return $this->db->delete('mensagem');
        }
    }

    public function naoLidas(){
        $query = $this->db->query('SELECT * FROM mensagem WHERE status=false');
        return $query->result();
    }

    public function marcarComoLida($id){
        $dados['status']=true;
        $this->db->where('id', $dados['id']);
        $this->db->update('mensagem', $dados);
    }

}
