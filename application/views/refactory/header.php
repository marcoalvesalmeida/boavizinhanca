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
    <script type="text/javascript" src="<?php echo base_url('bootstrap/js/jquery-3.1.1.min.js');?>"></script>
    <script>
        $(document).ready(function(){
            $("#title").mouseenter(function(){
                $(this).animate({opacity:'0.6' });
                $(this).css('color','#E2C503')
            });
            $("#title").mouseleave(function(){
                $(this).animate({opacity:'1' });
                $(this).css('color','#FFF')
            });
            $("#sair").mouseleave(function(){
                alert("Ei! Não seja mal, fique com a gente!");
            });
        });
        /*function menu(){
            if (document.body.scrollTop > 97) {
                document.getElementById('menu').style.background = "#222222";
                document.getElementById('logo').style.fontSize = "21px";
            } else {
                document.getElementById('menu').style.background = "transparent";
                document.getElementById('logo').style.fontSize = "28px";
            }*/
            $(function(){   
                var nav = $('#menu'); 
                $(window).scroll(function () { 
                    if ($(this).scrollTop() > 150) { 
                        nav.addClass("menuFixo"); 
                        nav.addClass("navbar-pages");
                        nav.addClass("menu-links");  
                    } else { 
                        nav.removeClass("menuFixo"); 
                        nav.removeClass("navbar-pages");
                    } 
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
                            <li id="sair"><a href="<?php echo base_url('/usuario/admin') ?>">ADMIN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
