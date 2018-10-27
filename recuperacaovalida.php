
<?php
include_once 'conexao.php';
if ($_POST){
$email = $_POST["email"];
$celular = $_POST["celular"];

$sql = "Select * from cliente where email = '".$email."' and celular ='".$celular."';";
$result = mysqli_query($con, $sql) or die (mysqli_error($con));


if (mysqli_num_rows($result) == 1){
    ?>
    <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recuperação de Senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="atualizar.php" method="POST">
    <div class="form-group">
      <label for="senha">Nova Senha</label>
      <input type="password" name="senha" class="form-control" id="senha" placeholder="Ex: 1234">
    </div>
        <div class="form-group">
      <label for="senhadois">Digite novamente a senha</label>
      <input type="password" name="senhadois" class="form-control" id="senhadois"  placeholder="Mesma senha digitada acima">
    </div>
    <input type="submit" value="atualizar">;
    </form>
    </div>
    </div>
      
    </div>
  </div>
</div>
    <?php
    }else{
        echo "deu ruim";
    }}?>
    