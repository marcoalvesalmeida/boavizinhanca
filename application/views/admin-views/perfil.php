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
                <li class="active">
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
                    <a href="#">
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
                                    <?php foreach($resultado as $linha){?>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nível</label>
                                                <input type="text" class="form-control" placeholder="Company" value="<?php echo $linha->nivel?>" <?php if($linha->nivel!="ALFA")echo "disabled";?> >
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Nome de Usuário</label>
                                                <input type="text" class="form-control" placeholder="Nome de Usuário" value="<?php echo $linha->nome_usuario?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Primeiro Nome</label>
                                                <input type="text" class="form-control" placeholder="Primeiro Nome" value="<?php echo $linha->nome?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Último Nome</label>
                                                <input type="text" class="form-control" placeholder="Último Nome" value="<?php echo $linha->sobrenome?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text" class="form-control" placeholder="Endereço" value="<?php echo $linha->endereco?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" placeholder="email" value="<?php echo $linha->email?>">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Senha</label>
                                                <input type="password" class="form-control" placeholder="senha" value="<?php echo $linha->senha?>">
                                            </div>
                                        </div>
                                    <div class="row col-xs-offset">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Sobre mim</label>
                                                <textarea rows="5" class="form-control" placeholder="Uma descrição sobre você..." value=""><?php echo $linha->bio;?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Salvar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php
    $this->load->view('admin-views/refactory/admin-footer');
?>