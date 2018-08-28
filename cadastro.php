<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>HOME</title>
    <!-- Links do BootStrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Link do css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="topo">
    <!-- Código de JavaScript do Bootstrap -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Login -->
    <?php
       include 'loginhome.php';
    ?>
    <!-- Fim do Login -->
    <!--- Logo -->
    <?php
       include 'logo.php';
    ?>
    <!-- Fim da Logo -->

    </div>
    <div id="container">
    <!--Menu-->
    <?php
    include 'menu.php';
    ?>
    <!-- Final do menu -->

     <!-- Cadastro de cliente -->
        <div class="cadastro container">
            
   <form>
       <h1>CADASTRO</h1>  
  <div class="form-row">
    <div class="form-group col-md-6"> <br>
      <label for="inputNomel4">Nome</label>
      <input type="Nome" class="form-control" id="inputNome4" placeholder="Ex: João">
    </div>
      <div class="form-group col-md-6"> <br>
        <label for="últúltimo sobrenome">Último sobrenome</label> 
      <input type="últimosobrenome" class="form-control" id="inputúltimo sobrenome" placeholder="Ex: Silva">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputTelefone">Telefone</label>
    <input type="text" class="form-control" id="inputTelefone" placeholder="Ex:(xx) xxxx-xxxx">
  </div>
  <div class="form-group col-md-6">
    <label for="inputCelular">Celular</label>
    <input type="text" class="form-control" id="inputCelular" placeholder="Ex:(xx) xxxxx-xxxx">
  </div>
  </div>
  
    <div class="form-group">
      <label for="Email">Email</label>
      <input type="text" class="form-control" id="inputEmail" placeholder="joaosilva@gmail.com">
    </div>
  
    <div class="form-group">
      <label for="inputSenha">Senha</label>
      <input type="text" class="form-control" id="inputSenha" placeholder="Ex: 1234">
    </div>
    <div class="form-group">
      <label for="inputDigite novamente a senha">Digite novamente a senha</label>
      <input type="text" class="form-control" id="inputDigite novamente a senha"  placeholder="Mesma senha digitada acima">
    </div>
    <button type="submit" class="btn btn-danger cor-botao mt-3 mb-5">Enviar</button>
  </form>

  </div>
      <!-- rodapé -->
      <footer class="cor-botao p-4" >
    <div class="botao btn btn bg-white p-0 mr-2">
        <img src="img/social/facebook.png" alt="" >
    </div>
    <div class="btn btn bg-white p-0">
        <img src="img/social/telegram.png" alt="">
    </div>
    </footer>
</body>
  