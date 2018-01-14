<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
	public function index()
	{
		$this->load->model('Ocorrencia_model', 'ocorrencia');
        $dados['ocorrencias'] = $this->ocorrencia->tipoCrime();
        $dados['meses'] = $this->ocorrencia->mesCrime();
		$this->load->view('admin-views/dashboard',$dados);
	}
    public function perfil()
	{
		$this->load->model('Usuario_model','usuarios');
		$id['id']=1;
        $dados['resultado']=$this->usuarios->pesquisaFiltro($id);
		$this->load->view('admin-views/perfil',$dados);
	}
    public function mensagem()
	{
		$this->load->model('Mensagem_model','mensagens');
        $dados['resultado']=$this->mensagens->getMensagens();
        $this->load->view('admin-views/mensagens',$dados);
	}
	public function usuarios()
	{
		$this->load->model('Usuario_model','usuarios');
        $dados['resultado']=$this->usuarios->getUsuarios();
		$this->load->view('admin-views/usuarios',$dados);
	}
}
