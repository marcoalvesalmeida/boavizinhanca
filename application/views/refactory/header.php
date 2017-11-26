<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Denunciar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.css')?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/style.css')?>"> 
    </head>
    <body class="pages">
        <nav class="navbar navbar-default navbar-pages">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-header">
                        <a class="navbar-brand logo" href="#">
                            Boa Vizinhança
                        </a>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="opcoes-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url('/')?>">HOME</a></li>
                            <li><a href="<?php echo base_url('ocorrencia')?>">LOCAIS</a></li>
                            <li><a href="<?php echo base_url('/#sobre')?>">SOBRE</a></li>
                            <li><a href="<?php echo base_url('/#contato')?>">CONTATO</a></li>
                            <li><a href="<?php echo base_url('/usuario/admin')?>">ADMIN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
