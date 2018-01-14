<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ocorrencia_model extends CI_Model {

	public function getOcorrencias(){
       $query = $this->db->get('ocorrencias');
       return $query->result();
    }

    public function salvar($dados=NULL){
        if($dados!=NULL){
            $this->db->insert('locations',$dados);
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
            return $this->db->delete('ocorrencias');
        }
    }

    public function pesquisaFiltros($dados=NULL){
        if($dados!=NULL){
            $rua=$dados['rua'];
            $bairro=$dados['bairro'];
            $query = $this->db->query('SELECT * FROM ocorrencias WHERE rua="'.$dados['rua'].'" OR bairro="'.$dados['bairro'].'" and tipo="'.$dados['tipo'].'" OR data="'.$dados['data'].'"');
            return $query->result();
        }
    }

    public function tipoCrime(){
        $query = $this->db->query('SELECT DISTINCT(tipo_crime), count(*) as "qtde" FROM locations GROUP BY tipo_crime');
        return $query->result();
    }

    public function mesCrime(){
        $query = $this->db->query('SELECT distinct(month(data_ocorrencia)) as "mes", year(data_ocorrencia) as "ano", count(month(data_ocorrencia)) as "qtde" from locations group by month(data_ocorrencia) order by year(data_ocorrencia) asc;');
        return $query->result();
    }
}
