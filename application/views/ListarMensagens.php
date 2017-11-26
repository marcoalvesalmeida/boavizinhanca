<?php
    $this->load->view('refactory/header.php');
?>
<div class="container">
    <h1 class="text-center">Mensagens:</h1>
   <?php
    if (isset($sucesso)){
      echo '<div class="alert alert-success">
           <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>Sucesso!</strong>'.$sucesso.'
          </div>';
    }
  ?> 
  <div class="table-users">
   <table class="table table-hover col-md-8">
    <thead>
      <tr>
        <th>Nome:</th>
        <th>Email:</th>
        <th>Assunto:</th>
        <th>Mensagem:</th>
        <th>Apagar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($resultado as $linha) {
        $id=$linha->id;
        echo '
        <tr>
          <td>'.$linha->nome.'</td>
          <td>'.$linha->email.'</td>
          <td>'.$linha->assunto.'</td>
          <td>'.$linha->mensagem.'</td>
          <td> <a href="mensagem/remover/'.$id.'"><i class="icon-trash"></i>Apagar</a></td>
        </tr>';
      }?>
    </tbody>
  </table>
</div>
</div>
</body>
</html>