<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	public function index()	{
        $this->load->model('Usuario_model','usuarios');
        $dados['resultado']=$this->usuarios->getUsuarios();
        $this->load->view('ListarUsuarios',$dados);
	}
    public function cadastrar($opt){
        if($opt==1){
            $this->load->view('CadastrarUsuario');
        }else if($opt==0){
            $this->load->model('Usuario_model','usuario');
            $dados['nome'] = $this->input->post('nome');
            $dados['email'] = $this->input->post('email');
            $dados['senha'] = $this->input->post('senha');
            $resultado = $this->usuario->salvar($dados);
            redirect('http://localhost/boavizinhanca/usuario');
        }
       
    }
    public function editar($id, $nome, $email){
        if($id==NULL){
            return 0;
        }
        $dados = array('id' => $id,'nome'=> $nome, 'email'=> $email);
        $this->load->view('EditarUsuario',$dados);
    }
    public function salvar(){
        //Verifica se o campo cpf está vazio
        if($this->input->post('nome')==NULL){
            return 0;
        }else{
            $this->load->model('Usuario_model','usuario');
            //A linha abaixo pega os dados do form e guarda no array 
            $dados['id']=$this->input->post('id');
            $dados['nome']=$this->input->post('nome');
            $dados['email']=$this->input->post('email');
            $dados['senha']=$this->input->post('senha');
            if($this->usuario->salvar($dados)==1){
                //Função para redirecionar para a página principal. Deve-se habilitar isso em autoload/helpers(url)
                $dados['sucesso'] = ' Registro salvo no banco de Dados!';
                $this->load->view('EditarUsuario',$dados);
            }else{
                //Essa linha deverá ser retirada por quebrar padrões
                echo 'Erro ao savar registro!';
            }
        }              
    }

    public function remover($id){
            $this->load->model('Usuario_model','usuario');
            //A linha abaixo pega os dados do form e guarda no array 
            if($this->usuario->remover($id)==1){
                //Função para redirecionar para a página principal. Deve-se habilitar isso em autoload/helpers(url)              
                $this->load->model('Usuario_model','usuarios');
                $dados['resultado']=$this->usuarios->getUsuarios();
                $dados['sucesso'] = ' Registro removido no banco de Dados!';
                $this->load->view('admin-views/usuarios',$dados);
            }else{
                //Essa linha deverá ser retirada por quebrar padrões
                echo 'Erro ao savar registro!';
            }
    }
}
