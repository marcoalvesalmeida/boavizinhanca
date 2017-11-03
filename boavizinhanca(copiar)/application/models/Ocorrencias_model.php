<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ocorrencias_model extends CI_Model {

	public function getOcorrencias(){
           $query = $this->db->get('ocorrencias');
           return $query->result();
	}
        
        public function salvar($dados=NULL){
            if($dados!=NULL){
                $this->db->insert('ocorrencias',$dados);
                return 1;
            }else{
                return 0;
            }
        }
}
