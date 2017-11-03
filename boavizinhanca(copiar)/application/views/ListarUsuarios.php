<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Boa Vizinhança - Denunciar</title>
        <meta name="description" content="Painel de Denúncias"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/customize.css">
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
	<h1>Usuários Cadastrados:</h1>
  <div class="table-users">
     <table class="table table-hover span7 offset3">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Editar</th>
        <th>Apagar</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($resultado as $linha) {
      $id=$linha->id;
      $nome=$linha->nome;
      $email=$linha->email;
      echo '
      <tr>
        <td>'.$linha->nome.'</td>
        <td>'.$linha->email.'</td>
        <td> <a href="usuario/editar/'.$id.'/'.$nome.'/'.$email.'"><i class="icon-edit"></i>Editar</a></td>
        <td> <a href="usuario/remover/'.$id.'"><i class="icon-trash"></i>Apagar</a></td>
      </tr>';
    }?>
    </tbody>
   </table>
  </div>
</div>
</body>
</html>