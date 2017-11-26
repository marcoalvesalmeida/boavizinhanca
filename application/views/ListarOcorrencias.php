<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Boa Vizinhança - Ocorrências</title>
  <meta name="description" content="Painel de Denúncias"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-responsive.css">
  <link rel="stylesheet" type="text/css" href="/bootstrap/css/customize.css">
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
  <h1>Todas as Ocorrências:</h1>
  <h2>Pesquise por:</h2>
  <div class="container-fluid">
    <div class="row-fluid">
    <form action="ocorrencia/pesquisaFiltros" method="POST">
        <label for="rua">Rua: </label><input type="text" name="rua" id="rua" class="span6">
        <label for="bairro">Bairro: </label><input type="text" name="bairro" id="bairro" class="span3">
        <label for="data">Data: </label><input type="date" name="data" id="data" class="span2">
        <label for="tipo">Tipo de Crime: </label><input type="text" name="tipo" id="tipo" class="span2"></br>
        <button type="input" class="btn btn-default">
          Buscar
        </button></br></br>
      </form>
    </div>
  </div>
  <div class="table-users">
   <table class="table table-hover span11 offset1">
    <thead>
      <tr>
        <th>Rua:</th>
        <th>Bairro:</th>
        <th>Tipo de Crime: </th>
        <th>Data: </th>
        <th>Descrição: </th>
        <th>Apagar </th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($resultado as $linha) {
        $id=$linha->id;
        $rua=$linha->rua;
        $bairro=$linha->bairro;
        $tipo=$linha->tipo;
        $data=date_create($linha->data);
        $data=date_format($data, 'd/m/Y');
        $descricao=$linha->descricao;
        echo '
        <tr onClick="visualizar('.$id.')">
          <td>'.$rua.'</td>
          <td>'.$bairro.'</td>
          <td>'.$tipo.'</td>
          <td>'.$data.'</td>
          <td>'.$descricao.'</td>
          <td> <a href="remover/'.$id.'"><i class="icon-trash"></i>Apagar</a></td>
        </tr>';
      }?>
    </tbody>
  </table>
</div>
</div>
</body>
</html>