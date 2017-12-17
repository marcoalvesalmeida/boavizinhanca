<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ocorrencia extends CI_Controller {

    public function index($dados = NULL) {
        if ($dados == NULL) {
            $this->load->model('Ocorrencia_model', 'ocorrencia');
            $dados['resultado'] = $this->ocorrencia->getOcorrencias();
            $this->load->view('ListarOcorrencias', $dados);
        } else {
            $this->load->view('ListarOcorrencias', $dados);
        }
    }

    public function salvar(){
            if ($this->input->post('longitude') == NULL) {
                return 0;
            } else {
                $this->load->model('Ocorrencia_model', 'ocorrencia');
                //A linha abaixo pega os dados do form e guarda no array 
                $dados['latitude'] = $this->input->post('txtLatitude');
                $dados['longitude'] = $this->input->post('txtLongitude');
                $dados['data'] = $this->input->post('data');
                $dados['descricao'] = $this->input->post('descricao');
                 $dados['tipo'] = $this->input->post('tipo');
                $this->ocorrencia->salvar($dados);
                if ($this->ocorrencia->salvar($dados) == 1) {
                //Função para redirecionar para a página principal. Deve-se habilitar isso em autoload/helpers(url)
                    $sucesso['sucesso'] = ' Registro salvo no banco de Dados!';
                    $this->index($dados = NULL);
                } else {
                    $sucesso['falha'] = 'Erro ao savar registro!';
                    $this->index($dados = NULL);
                }
            }
    }

    public function salvar1() {
        //Verifica se o campo rua está vazio
        if ($this->input->post('rua') == NULL) {
            return 0;
        } else {
            $this->load->model('Ocorrencia_model', 'ocorrencia');
            //A linha abaixo pega os dados do form e guarda no array 
            $dados['tipo'] = $this->input->post('tipo');
            $dados['rua'] = $this->input->post('rua');
            $dados['bairro'] = $this->input->post('bairro');
            $dados['data'] = $this->input->post('data');
            $dados['rua'] = $this->input->post('rua');
            $dados['descricao'] = $this->input->post('descricao');
            //Chama-se o método para persistir a ocorrencia
            if ($this->ocorrencia->salvar($dados) == 1) {
                //Função para redirecionar para a página principal. Deve-se habilitar isso em autoload/helpers(url)
                $sucesso['sucesso'] = ' Registro salvo no banco de Dados!';
                $this->index($dados = NULL);
            } else {
                $sucesso['falha'] = 'Erro ao savar registro!';
                $this->index($dados = NULL);
            }
        }
    }

    public function pageCadastrar() {
        redirect("/API_MAPS");
    }

    public function remover($id) {
        $this->load->model('Ocorrencia_model', 'ocorrencia');
        $dados['resultado'] = $this->ocorrencia->getOcorrencias();
        //A linha abaixo pega os dados do form e guarda no array 
        if ($this->ocorrencia->remover($id) == 1) {
            //Função para redirecionar para a página principal. Deve-se habilitar isso em autoload/helpers(url)
            $dados['sucesso'] = ' Registro removido no banco de Dados!';
            $this->load->view('CadastrarOcorrencia');
        } else {
            //Essa linha deverá ser retirada por quebrar padrões
            $dados['falha'] = 'Erro ao remover registro';
        }
    }

    public function pesquisaFiltros() {
        $this->load->model('Ocorrencia_model', 'ocorrencia');
        $dados['rua'] = $this->input->post('rua');
        $dados['bairro'] = $this->input->post('bairro');
        $dados['tipo'] = $this->input->post('tipo');
        $dados['data'] = $this->input->post('data');
        $resultado['resultado'] = $this->ocorrencia->pesquisaFiltros($dados);
        $this->index($resultado);
    }

}
