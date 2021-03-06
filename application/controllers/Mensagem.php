<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensagem extends CI_Controller {
	public function index($dados=NULL)	{
        $this->load->model('Mensagem_model','mensagens');
        $dados['resultado']=$this->mensagens->getMensagens();
        $this->load->view('admin-views/mensagens',$dados);
    }
    public function salvar(){
        $this->load->model('Mensagem_model','mensagens');
        $dados['nome'] = $this->input->post('nome');
        $dados['email'] = $this->input->post('email');
        $dados['assunto'] = "Contato pelo site";
        $dados['mensagem'] = $this->input->post('mensagem');
        date_default_timezone_set('America/Sao_Paulo');
        $dados['data_hora'] = date('Y-m-d H:i');
        $dados['status_mensagem']=false;
        $resultado = $this->mensagens->salvar($dados);
        redirect('/');
    }

    public function pageCadastrar(){
        $this->load->view('CadastrarMensagem');
    }

    public function remover($id){
        $this->load->model('Mensagem_model','mensagens');
        if($this->mensagens->remover($id)==1){
            $this->index();
        }else{
            $this->index();
        }
    }

    public function naoLidas(){
        $this->load->model('Mensagem_model','mensagens');
        $dados['resultado']=$this->mensagens->naoLidas();
        $this->load->view('ListarMensagens',$dados);
    }

    public function marcarComoLida($id){
        $this->load->model('Mensagem_model','mensagens');
        $this->mensagens->marcarComoLida($id);
        $this->naoLidas();
    }
}
