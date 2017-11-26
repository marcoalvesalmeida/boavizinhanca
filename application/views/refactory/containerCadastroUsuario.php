<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <h1 class="text-center">Cadastro de Administradores</h1>
    <form action="<?php echo url_title('usuario/cadastrar/1')?>" method="POST" accept-charset="utf-8" class="form-horizontal form-cadastro">
        <div class="row text-center">
            <div class="col-md-1 form-line">
                <label for="nome" class="control-label">Nome:</label>
            </div>
            <div class="col-md-7 form-line">
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            <div class="col-md-2 form-line">
                <label for="nascimento" class="control-label">Data de Nascimento:</label>
            </div>
            <div class="col-md-2 form-line">
                <input type="date" name="nascimento" id="nascimento" class="form-control" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-1 form-line">
                <label for="email" class="control-label">Email:</label>
            </div>
            <div class="col-md-4 form-line">
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="col-md-1 form-line">
                <label for="senha1" class="control-label">Senha:</label>
            </div>
            <div class="col-md-2  form-line">
                <input type="password" name="senha1" id="senha1" class="form-control" required>
            </div>
            <div class="col-md-2 form-line">
                <label for="senha2" class="control-label">Repita a Senha:</label>
            </div>
            <div class="col-md-2 form-line">
                <input type="password" name="senha2" id="senha2" class="form-control" required>
            </div>
        </div>
        <div class="row form-line text-center btn-cadastro">
            <button type="submit" class="btn btn-default btn-right btn-cadastro-1" onclick="verificaSenha()">Cadastrar</button>
            <button type="reset" class="btn btn-danger btn-right btn-cadastro-2" >Limpar</button>
        </div>
    </form>
</div>
<div class="alert alert-danger alert-dismissible text-center erro" id="erroSenha" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Erro!</strong> A senhas não coincidem.
</div>
<script>
    function verificaSenha(){
        var senha1 = document.getElementById("senha1").value;
        var senha2 = document.getElementById("senha2").value;
        if(senha1===senha2 && senha1!=='' && senha2!==''){
            
        }else if(senha1!=='' && senha2!==''){
            document.getElementById("erroSenha").style.display="block";   
        }
    }
</script>
