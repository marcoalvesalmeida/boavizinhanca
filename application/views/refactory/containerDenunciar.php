<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <h1 class="text-center">Painel de Denúncias</h1>
    <form action="<?php echo url_title('salvar')?>" method="POST" accept-charset="utf-8" class="form-horizontal form-cadastro">
        <div class="row text-center">
            <div class="col-md-1 form-line">
                <label for="rua" class="control-label">Rua:</label>
            </div>
            <div class="col-md-6 form-line">
                <input type="text" name="rua" id="rua" class="form-control" required>
            </div>
            <div class="col-md-1 form-line">
                <label for="bairro" class="control-label">Bairro:</label>
            </div>
            <div class="col-md-4 form-line">
                <input type="text" name="bairro" id="bairro" class="form-control" required>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-1 form-line">
                <label for="descricao" class="control-label"> Descrição: </label>
            </div>
            <div class="col-md-5 form-line">
                <textarea rows="5" class="form-control" name="descricao" required></textarea>
            </div>
             <div class="col-md-1 form-line">
                <label for="crime" class="control-label">Crime:</label>
            </div>
            <div class="col-md-5 form-line">
                <input type="text" name="crime" id="crime" class="form-control" required>
            </div>
            <div class="col-md-1 form-line">
                <label for="data" class="control-label">Data:</label>
            </div>
            <div class="col-md-2  form-line">
                <input type="date" name="data" id="data" class="form-control" required>
            </div>
            <div class="col-md-1 form-line">
                <label for="bo" class="control-label">B.O.?</label>
            </div>
            <div class="col-md-2  form-line bo">
               <!-- <input type="text" name="bo" id="bo" class="form-control" required>-->
                <input type="radio" name="bo" value="1"> SIM
                <input type="radio" name="bo" value="0"> NÃO
            </div>
        </div>
        <div class="row form-line text-center btn-cadastro">
            <button type="submit" class="btn btn-default btn-right btn-cadastro-1">Denunciar</button>
            <button type="reset" class="btn btn-danger btn-right btn-cadastro-2">Limpar</button>
        </div>
    </form>
</div>
