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
  <h1>Editar Usuário:</h1>
   <?php
    if (isset($sucesso)){
      echo '<div class="alert alert-success">
           <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>Sucesso!</strong>'.$sucesso.'
          </div>';
    }else{
      echo '<div class="alert alert-info">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Atenção!</strong> Para sua segurança confirme sua senha para prosseguir com as alterações.
      </div>';
    }
  ?> 
   <form action="/boavizinhanca/boavizinhanca/usuario/salvar" method="POST"> 
                <div class="controls">
                    <label for="tipo">Nome:</label><input id="nome" class="span7" type="text" name="nome" placeholder="Digite o nome..."  required value=<?php if(isset($nome)){ echo'"'.$nome.'"';}?>>
                    <label for="bairro">Email:</label> <input id="email" class="span7" type="email" name="email" placeholder="Digite o email..."  required value=<?php if(isset($email)){echo'"'.$email.'"';}?>>
                    <label >Senha:</label><input class="span7" type="password" name="senha" required>
                    <input type="password" name="id" style="display:none;" readonly="" value=<?php if(isset($email)){echo'"'.$id.'"';}?>>
                </div>
                <div class="form-actions">
                    <button class="btn btn-primary">Salvar</button>
                    <button type="reset" class="btn">Limpar Campos</button>
                </div>
            </form>
        </div>
  <p class="footer" align="center">A página foi carregada em <strong>{elapsed_time}</strong> segundos. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
  </div>
</div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>