<?php $this->load->view('admin-views/refactory/admin-header')?>
<script>
    var cont = 0;
    function exibeMensagem(id) {
        $(function () {            
            $("#mensagem"+id).dialog();
        });
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
            <li>
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
            <li class="active">
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
            <a class="navbar-brand" href="#">Mensagens</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-dashboard"></i>
                        <p class="hidden-lg hidden-md">Mensagens</p>
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <p>Sair</p>
                    </a>
                </li>
                <li class="separator hidden-lg hidden-md"></li>
            </ul>
        </div>
    </div>
</nav>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Todas as mensagens</h4>
                        <p class="category">Veja aqui as mensagens</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                     <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Assunto</th>
                            <th>Data</th>
                            <th>Hora</th>
                            <th>Remover</th>
                        </thead>
                        <tbody>
                         <?php
                         $cont=1;
                         foreach ($resultado as $linha) {
                            $id=$linha->id;
                            echo '
                            <div id="mensagem'.$id.'" title="Contato pelo Site" style="display:none">
                                <p>'.$linha->mensagem.'</p>
                            </div>
                            <tr onclick="exibeMensagem('.$id.')" style="cursor:pointer;">
                              <td>'.$cont++.'</td>
                              <td>'.$linha->nome.'</td>
                              <td>'.$linha->email.'</td>
                              <td>'.$linha->assunto.'</td>
                              <td>'.date('d/m/Y',strtotime($linha->data_hora)).'</td>
                              <td>'.date('H:m',strtotime($linha->data_hora)).'</td>
                              <td> <a href="/boavizinhanca/mensagem/remover/'.$id.'"><i class="icon-trash"></i>Apagar</a></td>
                          </tr>';
                      }?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>


</div>
</div>
</div>

<?php $this->load->view('admin-views/refactory/admin-footer')?>