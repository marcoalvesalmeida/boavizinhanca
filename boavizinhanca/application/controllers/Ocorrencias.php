<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ocorrencias extends CI_Controller {
	public function index()	{
            //Carrega o model relativo a ocorrências
            $this->load->model('Ocorrencias_model','ocorrencias');
            //Obtem os dados do model
            $dados['resultado'] = $this->ocorrencias->getOcorrencias();
            $this->load->view('ListarOcorrencias',$dados);
	}
}
