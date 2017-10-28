<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Boa Vizinhança - Denunciar</title>
        <meta name="description" content="Painel de Denúncias"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-responsive.css">
</head>
<body>
<div id="container" align="center">
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <div class="container">
                 <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                   
                  </a>
              <!-- Tenha certeza de deixar a marca se você quer que ela seja mostrada -->
              <a class="brand" href="#">Boa Vizinhança</a>

              <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->
              <div class="nav-collapse collapse">
                <!-- .nav, .navbar-search, .navbar-form, etc -->
                <ul class="nav">
                    <li class="active">
                        <a href="#">Início</a>
                    </li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Locais</a></li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
	<h1>Denuncie!</h1>
        <div class="alert alert-info">
            <strong>50%</strong> Quase lá! Preencha os dados corretamente e clique em Denunciar...
        </div>
        <div class="progress progress-striped active">
                    <div class="bar" style="width: 50%;"></div>
                </div>
        <div class="body">
            <form action="index.php/ocorrencias/salvar" method="POST"> 
                <div class="controls">
                    <i class="icon-tags"></i><label for="tipo">Crime:</label><input id="tipo" class="span10" type="text" name="tipo" placeholder="Digite o tipo de crime...">
                    <label for="bairro">Bairro:</label> <input id="bairro" class="span10" type="text" name="bairro" placeholder="Digite o bairro onde ocorreu...">
                    <label >Rua:</label><input class="span10" type="text" name="rua" placeholder="Digite a rua onde ocorreu">
                    <label >Data:</label><input class="span10" type="date" name="data">
                    <label >Descrição:</label> <textarea rows="4" class="span10" name="descricao"></textarea>

                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Denunciar</button>&nbsp
                    <button type="reset" class="btn">Limpar Campos</button>
                </div>
            </form>
        </div>
	<p class="footer">A página foi carregada em <strong>{elapsed_time}</strong> segundos. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
</body>
<!-- Carregando scripts .js -->
<script type="text/javascript" src="/bootstrap/js/bootstrap.js"></script>
</html>
