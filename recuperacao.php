<?php
include_once 'recuperacaovalida.php';
?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recuperação de Senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="recuperacaovalida.php" method="POST">
        <div class="form-group"> <br>
        <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email">
        </div>
        <div class="form-group"> <br>
        <label for="email">Celular</label>
            <input name="celular" type="text" class="form-control" id="celular">
        </div>
        <input type="submit" value="Enviar" data-toggle="modal" data-target="#modal2" class="btn btn-dark cor-botao text-white">
        </form>
      </div>
      
    </div>
  </div>
</div>