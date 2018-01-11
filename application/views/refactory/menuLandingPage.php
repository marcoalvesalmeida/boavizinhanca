<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Boa Vizinhança</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/style.css');?>">
        <script src="<?php echo base_url('bootstrap/js/jquery.js');?>"></script> 
        <script src="https://use.fontawesome.com/913fcc4808.js"></script>
    </head>
    <body>
        <nav  id="menu"  class="navbar navbar-default navbar-fixed-top menu">
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
                    <a class="navbar-brand logo" id="logo" href="#">
                        Boa Vizinhança
                    </a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="nav navbar-nav menu-links">
                            <li><a href="<?php echo base_url('/') ?>">HOME</a></li>
                            <li><a href="<?php echo base_url('ocorrencia') ?>">LOCAIS</a></li>
                            <li><a href="<?php echo base_url('/#sobre') ?>">SOBRE</a></li>
                            <li><a href="<?php echo base_url('/#contato') ?>">CONTATO</a></li>
                            <li><a href="<?php echo base_url('/Admin') ?>">ADMIN</a></li>
                        </ul>
                    </div>
                </div>
        </nav>
