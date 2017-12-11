<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <h1>Todas as Ocorrências:</h1>
    <h2>Pesquise por:</h2>
    <form action="<?php echo base_url('ocorrencia/pesquisaFiltros'); ?>" class="form-cadastro" method="POST">
        <div class="row text-center">
            <div class="col-md-1 form-line">
                <label for="rua" class="control-label">Rua: </label>
            </div>
            <div class="col-md-5 form-line">
                <input type="text" name="rua" class="form-control" id="rua">
            </div>
        </div>
        <div class="row text-center">
            <div class="form-line col-md-1">
                <label for="bairro" class="control-label ">Bairro: </label>
            </div>
            <div class="col-md-4 form-line">
                <input type="text" name="bairro" id="bairro" class="form-control">
            </div>
        </div>
        <div class="row text-center">
            <div class="form-line col-md-1">
                <label for="data" class="control-label">Data:</label>
            </div>
            <div class="col-md-2 form-line">
                <input type="date" name="data" id="data" class="form-control">
            </div> 
        </div>              
        <div class="row text-center">
            <div class="col-md-2 form-line">
              <label for="tipo" class="control-label">Tipo de Crime: </label>
          </div>
          <div class="col-md-5 form-line">
            <input type="text" name="tipo" id="tipo" class="form-control">
        </div>
    </div> 

    <div class="row">
        <div class="form-line">
            <button type="input" class="btn btn-default">
                Buscar
            </button></br></br>
        </div>
    </div>     
</form>

<div class="table-users">
    <table class="table table-hover col-md-7">
        <thead>
            <tr>
                <th>Rua:</th>
                <th>Bairro:</th>
                <th>Tipo de Crime: </th>
                <th>Data: </th>
                <th>Descrição: </th>
                <th>Apagar </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($resultado as $linha) {
                $id = $linha->id;
                $rua = $linha->rua;
                $bairro = $linha->bairro;
                $tipo = $linha->tipo;
                $data = date_create($linha->data);
                $data = date_format($data, 'd/m/Y');
                $descricao = $linha->descricao;
                echo '
                <tr onClick="visualizar(' . $id . ')">
                  <td>' . $rua . '</td>
                  <td>' . $bairro . '</td>
                  <td>' . $tipo . '</td>
                  <td>' . $data . '</td>
                  <td>' . $descricao . '</td>
                  <td> <a href="ocorrencia/remover/' . $id . '"><i class="icon-trash"></i>Apagar</a></td>
              </tr>';
          }
          ?>
      </tbody>
  </table>
</div>
</div>
