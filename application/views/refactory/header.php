<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Boa Vizinhança</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/style.css') ?>"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="../../../bootstrap/js/bootstrap.js"></script>
        <script src="https://use.fontawesome.com/913fcc4808.js"></script>
    </head>
    <body class="pages">
        <nav class="navbar navbar-default navbar-pages">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-header">
                        <a class="navbar-brand logo" href="<?php echo base_url('/') ?>">
                            Boa Vizinhança
                        </a>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="opcoes-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url('/') ?>">HOME</a></li>
                            <li><a href="<?php echo base_url('ocorrencia') ?>">LOCAIS</a></li>
                            <li><a href="<?php echo base_url('/#sobre') ?>">SOBRE</a></li>
                            <li><a href="<?php echo base_url('/#contato') ?>">CONTATO</a></li>
                            <li><a href="<?php echo base_url('/usuario/admin') ?>">ADMIN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
