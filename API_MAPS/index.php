<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Painel de Denúncias - Boa Vizinhança</title>
    <script src="https://use.fontawesome.com/913fcc4808.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:600" type="text/css" rel="stylesheet" />
    <link href="bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="bootstrap/css/style.css" type="text/css" rel="stylesheet" />
    <link href="estilo.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyDKHslmsBHG61bJEvzFFrgY4BY3rv-aOW0"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="mapa.js"></script>
    <script type="text/javascript" src="jquery-ui.custom.min.js"></script>
    <script>
        $(function(){   
            var nav = $('#menu'); 
            $(window).scroll(function () { 
                if ($(this).scrollTop() > 250) { 
                    nav.addClass("menuFixo"); 
                    nav.addClass("navbar-pages");
                    nav.addClass("menu-links"); 
                    $(".menuFixo").css("background-color","transparent");
                } else { 
                    nav.removeClass("menuFixo"); 
                    nav.removeClass("navbar-pages");
                } 
            });  
        });
    </script>
    <script src="bootstrap/js/bootstrap.js"></script>
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
                    <a class="navbar-brand logo" href="">
                        Boa Vizinhança
                    </a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="opcoes-menu" id="menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="">HOME</a></li>
                        <li><a href="">LOCAIS</a></li>
                        <li><a href="">SOBRE</a></li>
                        <li><a href="">CONTATO</a></li>
                        <li id="sair"><a href="">ADMIN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div id="apresentacao" class="container">

        <h1>Painel de Denúncias - Boa Vizinhança</h1>

        <form method="post" action='../ocorrencia/salvar'>    
            <fieldset>

                <legend>Boa Vizinhança</legend>
                <div class="campos">
                    <label for="txtEndereco">Endereço:</label>
                    <input type="text" id="txtEndereco" name="txtEndereco" />
                    <input type="button" id="btnEndereco" name="btnEndereco" value="Mostrar no mapa" />
                </div>
                <div id="mapa"></div>

                <div class="row text-center">
                    <div class="col-md-1 form-line">
                        <label for="descricao" class="control-label"> Descrição: </label>
                    </div>
                    <div class="col-md-10 form-line">
                        <textarea rows="5" class="form-control" name="descricao"></textarea>
                    </div>
                </div>
                <div class="row text-center ">

                    <div class="alinhar">
                    <div class="col-md-1 form-line">
                        <label for="crime" class="control-label">Crime:</label>
                    </div>
                    <div class="col-md-5 form-line">
                        <input type="text" name="tipo" id="crime" class="form-control tm" required>
                    </div>
                    <div class="col-md-1 form-line">
                        <label for="data" class="control-label">Data:</label>
                    </div>
                    <div class="col-md-2  form-line">
                        <input type="date" name="data" id="data" class="form-control tm" required>
                    </div>
                    </div>
                </div>

                <div class="row form-line text-center btn-cadastro">
                    <button type="submit" class="btn btn-default btn-right btn-cadastro-1 ">Denunciar</button>
                    <button type="reset" class="btn btn-danger btn-right btn-cadastro-2">Limpar</button>
                </div>

                <input type="hidden" id="txtLatitude" name="txtLatitude" />
                <input type="hidden" id="txtLongitude" name="txtLongitude" />
            </fieldset>
        </form>
    </div>
    <footer class="container-fluid" id="container-rodape"> 
        <div class="row panel-footer">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center">
                <p><i class="fa fa-laptop fa-lg "> Marco Alves de Almeida</i></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center">
                <p><i class="fa fa-copyright fa-lg"> Direitos Reservados.</i></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center" id="redes-sociais">
                <p>
                    <a href="https://www.facebook.com/marcoalvesdealmeida" target="_blank"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"> Facebook</i></a>&nbsp
                    <a href="http://twitter.com"><i class="fa fa-twitter fa-lg" aria-hidden="true"> Twitter</i></a>&nbsp
                    <a href="http://twitter.com"><i class="fa fa-instagram fa-lg" aria-hidden="true"> Instagram</i></a>&nbsp
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
