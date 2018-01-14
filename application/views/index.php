<?php
$this->load->view("refactory/header");
?>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 header-content">
                    <h1 id="title" class="title text-center">BOA VIZINHANÇA</h1>
                    <h2 class="subtitle text-center">Em busca de uma cidade melhor.</h2>
                    <button class="btn btn-warning text-center btn-lg denunciar">
                        Denuncie
                    </button>
                </div>	
            </div>			
        </div>
    </section>
    <!-- About Section -->  
    <section class="img-site" id="about" >
        <div class="container">
            <div class="row anime">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" >Sobre</h2>
                    <h3 class="section-subheading text-muted">O que é o site "Boa Vizinhança"?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo base_url('bootstrap/img/about/1.jpg')?>" alt="">
                            </div>
                            <div class="timeline-panel anime">
                                <div class="timeline-heading">
                                    <h4>O que é?</h4>
                                    <h4 class="subheading">Como Surgiu e para que serve?</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">O site "Boa Vizinhança", como o nome já sugere, nasceu de uma ideia vinculada a política da boa vizinhança, ou seja, de que cidadãos de bem possam utilizar a ferramenta com o objetivo de ajudar seus vizinhos, amigos, colegas e até mesmo desconhecidos!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo base_url('bootstrap/img/about/3.jpg')?>" alt="">
                            </div>
                            <div class="timeline-panel anime">
                                <div class="timeline-heading">
                                    <h4>Como?</h4>
                                    <h4 class="subheading">De que forma foi desenvolvido?</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">O site utiliza grande poderio de programação web, que envolve desde os mais básico HTML, CSS, PHP, até os complexos como MySQL, BOOTSTRAP e Java Script. Contanto com tecnologia voltada ao desenvolvimento RESPONSIVO e multi plataformas.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo base_url('bootstrap/img/about/m.jpg')?>" alt="">
                            </div>
                            <div class="timeline-panel anime">
                                <div class="timeline-heading">
                                    <h4>Por quem?</h4>
                                    <h4 class="subheading">Quem Desenvolveu?</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">O projeto foi elaborado nas disciplinas de Fundamentos de Sistemas da Informação e Programação WEB2. Desenvolvido por Marco Alves de Almeida, aluno do 4º Semestre do Curso de Tecnologia em Análise e Desenvolvimento de Sistemas - IFNMG Câmpus Januária.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Faça Parte
                                    <br>da Nossa
                                    <br>História!</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- End Section About -->
        <!-- Contact Section -->  
        <section class="contact">
            <div class="container">
                <h1 class="text-center" id="contact">Fale conosco:</h1>
                <form class="form-horizontal form-cadastro" id="ajax_form">
                    <div class="row text-center">
                        <div class="col-md-1 form-line">
                            <label for="nome" class="control-label">Nome:</label>
                        </div>
                        <div class="col-md-5 form-line">
                            <input type="text" name="nome" class="form-control form-control-inverse" required>
                        </div>
                        <div class="col-md-1 form-line">
                            <label for="email" class="control-label">Email:</label>
                        </div>
                        <div class="col-md-5 form-line">
                            <input type="email" name="email" class="form-control form-control-inverse" required>
                        </div>                  
                    </div>
                    <div class="row text-center">
                        <div class="col-md-1 form-line">
                            <label for="mensagem" class="control-label">Mensagem:</label>
                        </div>
                        <div class="col-md-11 form-line">
                            <textarea name="mensagem" id="mensagem" class="form-control form-control-inverse" rows="10" required></textarea>
                        </div>
                    </div>
                    <section class="anime">
                        <div class="row form-line text-center btn-cadastro" id="layer_1">
                            <button type="submit" class="btn btn-default btn-right btn-cadastro-1">Enviar</button>
                            <button type="reset" class="btn btn-danger btn-right btn-cadastro-2">Limpar</button>
                        </div>
                    </section>
                    <span id="success_message" class="col-md-6 col-xs-push-4 alert alert-success" role="alert" style="display:none;"></span>
                </form>    
            </div>
            <?php
            $this->load->view('refactory/footer');
            ?>