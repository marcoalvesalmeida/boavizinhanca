<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Boa Vizinhança - Contato</title>
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
	<h1>Nos envie uma mensagem:</h1
        <div class="body">
            <form  action="salvar" method="POST"> 
                <div class="controls">
                    <label for="nome">Nome:</label><input id="nome" class="span10" type="text" name="nome" placeholder="Digite o seu nome..." required>
                    <label for="email">Email</label> <input id="email" class="span10" type="text" name="email" placeholder="Digite o seu email..." required>
                    <label for="assunto">Assunto:</label><input class="span10" type="text" name="assunto" placeholder="Sobre o que deseja tratar?">
                    <label for="mensagem">Mensagem:</label> <textarea rows="4" class="span10" name="mensagem"></textarea>
                </div>
                <div class="form-actions">
                    <button class="btn btn-primary" href="index.php/ocorrencias/salvar">Enviar</button>&nbsp
                    <button type="reset" class="btn">Limpar Campos</button>
                </div>
            </form>
        </div>
</body>
<!-- Carregando scripts .js -->
<script type="text/javascript" src="/bootstrap/js/bootstrap.js"></script>
</html>
