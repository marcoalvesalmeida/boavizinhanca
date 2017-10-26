<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ocorrencias_model extends CI_Model {

	public function getOcorrencias(){
           $query = $this->db->get('ocorrencias');
           return $query->result();
	}
}
