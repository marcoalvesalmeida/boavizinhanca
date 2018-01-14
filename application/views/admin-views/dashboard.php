<?php
    $this->load->view('admin-views/refactory/admin-header');
?>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Crimes', 'Quantidade'],
          <?php 
            foreach ($ocorrencias as $g) {
              echo '["'.$g->tipo_crime.'",'.$g->qtde.'],';
            }
          ?>
        ]);

        var options = {
          //title: 'My Daily Activities'
        };
        var chart = new google.visualization.PieChart(document.getElementById('grafico1'));

        chart.draw(data, options);
         }
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBasic);
        function drawBasic() {
     var data = google.visualization.arrayToDataTable([
        ['Mês', 'Quantidade de Crimes', { role: 'style' } ],
        <?php 
        $truecolors = array("#00FF7F", "#FFD700", "#00CED1", "#708090","#DC143C","#3CB371", "#FF8C00", "#00BFFF","#2F4F4F", "red");
            $i=0;
            foreach ($meses as $g) {
                echo '["'.$g->mes."/".$g->ano.'",'.$g->qtde.', "color:'.$truecolors[$i++].'"],';
                if($i==10)
                    break;
            }
         ?>
      ]);

     var chart = new google.visualization.ColumnChart(document.getElementById('grafico2'));

        chart.draw(data);
    }
        
    </script>
    <div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="<?php echo base_url('bootstrap/assets/img/sidebar-4.jpg');?>">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Boa Vizinhança
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index">
                        <i class="pe-7s-graph"></i>
                        <p>Admin</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Admin/perfil')?>">
                        <i class="pe-7s-user"></i>
                        <p>Perfil</p>
                    </a>
                </li>
                <li id="menu-lat-4">
                    <a href="<?php echo base_url('Admin/usuarios')?>">
                        <i class="pe-7s-users"></i>
                        <p>Usuários</p>
                    </a>
                </li>
                <li id="menu-lat-3">
                    <a href="<?php echo base_url('Admin/mensagem')?>">
                        <i class="pe-7s-note2"></i>
                        <p>Mensagens</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="<?php echo base_url('LandingPage')?>">
                        <i class="pe-7s-rocket"></i>
                        <p>Ir para o site</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Painel de Controle</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Painel de Controle</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <p>Sair</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

    <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                         <div class="header">
                                <h4 class="title">Índice Criminal</h4>
                                <p class="category">Gráfico por tipo de crime</p>
                            </div>
                         <div id="grafico1"></div>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                         <div class="header">
                                <h4 class="title">Índice Criminal</h4>
                                <p class="category">Gráfico mensal de crimes</p>
                            </div>
                         <div id="grafico2" ></div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
</body>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url('bootstrap/assets/js/light-bootstrap-dashboard.js?v=1.4.0');?>"></script>
</html>

