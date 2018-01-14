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
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:600" type="text/css" rel="stylesheet" />
    <link href='<?php echo base_url("bootstrap/css/mapa.css")?>' type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyDKHslmsBHG61bJEvzFFrgY4BY3rv-aOW0"></script>
    <script type="text/javascript" src='<?php echo base_url("bootstrap/js/jquery.min.js")?>'></script>
    <script type="text/javascript" src='<?php echo base_url("bootstrap/js/mapa.js")?>'></script>
    <script type="text/javascript" src='<?php echo base_url("bootstrap/js/jquery-ui.custom.min.js")?>'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <script>
        $(document).ready(function(){
            $('#ajax_form').submit(function(){
                var dados = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('mensagem/salvar');?>",
                    data: dados,
                    success: function(data)
                    {
                        $("form").trigger("reset");  
                          $('#success_message').fadeIn().html("Mensagem enviada com sucesso!");  
                          setTimeout(function(){  
                               $('#success_message').fadeOut("Slow");  
                          }, 3000); 
                    }
                });
                return false;
            });
        });
        </script>
        <script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.js')?>"></script>
        <script src="https://use.fontawesome.com/913fcc4808.js"></script>
    </head>
    <body class="pages">
        <nav class="navbar navbar-default navbar-pages navbar-fixed-top">
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
                    <div class="opcoes-menu" id="menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url('/') ?>">HOME</a></li>
                            <li><a href="<?php echo base_url('ocorrencia') ?>">LOCAIS</a></li>
                            <li><a href="<?php echo base_url('/#about') ?>">SOBRE</a></li>
                            <li><a href="<?php echo base_url('/#contact') ?>">CONTATO</a></li>
                            <li id="sair"><a href="<?php echo base_url('/Admin') ?>">ADMIN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
