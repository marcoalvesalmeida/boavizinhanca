<?php
  $pdo = new PDO('mysql:host=localhost;dbname=db_boa', "root", "");
  $query =  $pdo->query("SELECT * FROM locations;");
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKHslmsBHG61bJEvzFFrgY4BY3rv-aOW0">
  </script>
  <script type="text/javascript">
    var map;
    var centerPos = new google.maps.LatLng(-15.479308,-44.370286);
    var zoomLevel = 14;
    function initialize() {
      var mapOptions = {
        center: centerPos,
        zoom: zoomLevel
      };
      map = new google.maps.Map( document.getElementById("map-canvas"), mapOptions );
        var locations = [<?php while($linha=$query->fetch(PDO::FETCH_OBJ)){
          echo '
      ["'.$linha->titulo.'",'.$linha->latitude.','.$linha->longitude.'],';}?>];

      var image = 'images/crime.png';

      for (i = 0; i < locations.length; i++) {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(locations[i][1], locations[i][2]),
          title: locations[i][0],
          map: map,
          icon: image
        });
      }
      var logoControlDiv = document.createElement('div');
      var logoControl = new LogoControl(logoControlDiv, map);

      logoControlDiv.index = 1;
      map.controls[google.maps.ControlPosition.TOP_CENTER].push(logoControlDiv);
    }
    function LogoControl(controlDiv, map) {

      controlDiv.style.padding = '5px';

      var controlUI = document.createElement('div');
      controlUI.style.backgroundImage = 'url(images/logo.png)';
      controlUI.style.width = '300px';
      controlUI.style.height = '116px';
      controlUI.style.cursor = 'pointer';
      controlUI.title = 'Click to set the map to Home';
      controlDiv.appendChild(controlUI);

      google.maps.event.addDomListener(controlUI, 'click', function() {
        map.setCenter(centerPos)
        map.setZoom(zoomLevel)
      });

    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Painel de Consulta - Boa Vizinhança</title>
    <script src="https://use.fontawesome.com/913fcc4808.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:600" type="text/css" rel="stylesheet" />
    <link href="bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="bootstrap/css/style.css" type="text/css" rel="stylesheet" />
    <link href="estilo.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyDKHslmsBHG61bJEvzFFrgY4BY3rv-aOW0"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="mapa.js"></script>
     <style type="text/css">
    html { height: 100% }
    body { height: 100%; margin: 0; padding: 0 }
    .wrap { max-width: 75em; min-height: 40em; height:100%; width:100%; margin: 0 auto; padding-top: 2.5%;}
    #map-canvas { height: 90%; }
  </style>
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
<body>
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

  <div class="wrap">
    <div id="map-canvas"></div>
  </div>
</body>
</html>