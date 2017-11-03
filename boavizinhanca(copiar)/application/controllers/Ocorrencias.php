<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ocorrencias extends CI_Controller {
	public function index()	{
            //Carrega o model relativo a ocorrências
            $this->load->model('Ocorrencias_model','ocorrencias');//Poderia ser carregado através do autoload
            //Obtem os dados do model
            $dados['resultado'] = $this->ocorrencias->getOcorrencias();
            $this->load->view('CadastrarOcorrencia');
	}
        public function salvar(){
            //Verifica se o campo cpf está vazio
            if($this->input->post('rua')==NULL){
                return 0;
            }else{
                $this->load->model('Ocorrencias_model','ocorrencias');
                //A linha abaixo pega os dados do form e guarda no array 
                $dados['tipo']=$this->input->post('tipo');
                $dados['rua']=$this->input->post('rua');
                $dados['bairro']=$this->input->post('bairro');
                $explode= explode("-",$this->input->post('data'));
                $dados['dia']=$explode[2];
                $dados['mes']=$explode[1];
                $dados['ano']=$explode[0];
                $dados['rua']=$this->input->post('rua');
                $dados['descricao']=$this->input->post('descricao');
                //Chama-se o método para persistir a ocorrencia
                if($this->ocorrencias->salvar($dados)==1){
                    //Função para redirecionar para a página principal. Deve-se habilitar isso em autoload/helpers(url)
                    header('Location:localhost/boavizinhanca/boavizinhanca/index.php');
                }
            }
                        
        }
}
