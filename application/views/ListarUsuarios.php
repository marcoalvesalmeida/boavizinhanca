<?php
$this->load->view('refactory/header.php');
?>
<h1 class="text-center">Usuários Cadastrados:</h1>
<div class="container">
    <div class="table-users">
        <table class="table table-hover col-md-7 offset3">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Email:</th>
                    <th>Editar</th>
                    <th>Apagar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($resultado as $linha) {
                    $id = $linha->id;
                    $nome = $linha->nome;
                    $email = $linha->email;
                    echo '
        <tr>
          <td>' . $linha->nome . '</td>
          <td>' . $linha->email . '</td>
          <td> <a href="usuario/editar/' . $id . '/' . $nome . '/' . $email . '"><i class="fa fa-pencil-square fa-lg"></i> Editar</a></td>
          <td> <a href="usuario/remover/' . $id . '"><i class="fa fa-trash fa-lg"></i> Apagar</a></td>
        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
$this->load->view('refactory/footer.php');
?>