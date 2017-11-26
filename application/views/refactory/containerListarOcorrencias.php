<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <h1>Todas as Ocorrências:</h1>
    <h2>Pesquise por:</h2>
    <form action="<?php echo url_title('pesquisaFiltros'); ?>" class="form-horizontal" method="POST">
        <div class="row">
            <div class="form-line">
                <label for="rua" class="control-label col-md-1">Rua: </label>
                <input type="text" name="rua" class="form-control col-md-6" id="rua">
            </div>
        </div>
        <div class="row">
            <div class="form-line">
                <label for="bairro" class="control-label col-md-1">Bairro: </label><input type="text" name="bairro" id="bairro" class="form-control col-md-4">
                <label for="data" class="control-label col-md-1">Data: </label><input type="date" name="data" id="data" class="form-control col-md-4">
            </div>
        </div>
        <div class="row">
            <div class="form-line">
                <label for="bairro" class="control-label col-md-1">Bairro: </label><input type="text" name="bairro" id="bairro" class="form-control col-md-3">
                <label for="data" class="control-label col-md-1">Data: </label><input type="date" name="data" id="data" class="form-control col-md-2">
                <label for="tipo" class="">Tipo de Crime: </label><input type="text" name="tipo" id="tipo" class="form-control col-md-3"></br>
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
        <table class="table table-hover span11 offset1">
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
