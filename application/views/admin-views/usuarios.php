<?php
    $this->load->view('admin-views/refactory/admin-header');
?>
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
                <li id="menu-lat-4" class="active">
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
                    <a class="navbar-brand" href="#">Perfil</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Perfil</p>
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Editar Perfil</h4>
                            </div>
                            <div class="content">
                                <form id="ajax_form">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nível</label>
                                                <input type="text" class="form-control" placeholder="Nível" value="" >
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Nome de Usuário</label>
                                                <input type="text" class="form-control" placeholder="Nome de Usuário" value="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Primeiro Nome</label>
                                                <input type="text" class="form-control" placeholder="Primeiro Nome" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Último Nome</label>
                                                <input type="text" class="form-control" placeholder="Último Nome" value="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text" class="form-control" placeholder="Endereço" value="" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" placeholder="email" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Senha</label>
                                                <input type="password" class="form-control" placeholder="senha" value="" >
                                            </div>
                                        </div>
                                    <div class="row col-xs-offset">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Sobre mim</label>
                                                <textarea rows="5" class="form-control" placeholder="Uma descrição sobre você..." value="" >
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Salvar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Todos os Administradores</h4>
                        <p class="category">Veja aqui os administradores</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                     <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Sobrenome</th>
                            <th>Nome de Usuário</th>
                            <th>Nível</th>
                            <th>Endereço</th>
                        </thead>
                        <tbody>
                         <?php
                         $cont=1;
                         foreach ($resultado as $linha) {
                            $id=$linha->id;
                            echo '
                            <tr>
                              <td>'.$cont++.'</td>
                              <td>'.$linha->nome.'</td>
                              <td>'.$linha->email.'</td>
                              <td>'.$linha->sobrenome.'</td>
                              <td>'.$linha->nome_usuario.'</td>
                              <td>'.$linha->nivel.'</td>
                              <td>'.$linha->endereco.'</td>
                              <td> <a href="'.base_url("Usuario/remover/").$id.'"><i class="icon-trash"></i>Apagar</a></td>
                          </tr>';
                      }?>
                  </tbody>
              </table>
          </div>
      </div>
            </div>
        </div>


<?php
    $this->load->view('admin-views/refactory/admin-footer');
?>