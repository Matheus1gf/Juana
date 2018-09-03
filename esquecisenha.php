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
    <!--Menu-->
    <?php
    include 'menu.php';
    ?>
    <!-- Final do menu -->
        <style>
            .vl {
                
                border-left: 3px solid lightgray;
                height: 100%;
            }
        </style>
        <div id="container-pedidos"class="container mt-5 mb-5">
            <h1 class="esquecisenha text-center">Esqueci Minha Senha</h1>
            <hr class="linha cor-botao">
            <div class="row">
                <div class="col-md-6">
                    <form class="container">
                        <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailSenha" placeholder="Seu e-mail">
                        </div>
                      <button type="submit" class="btn btn-dark cor-botao text-white btn-lg">Enviar</button>
                    </form>
                </div>     
                           
                
             <div class="col-md-6 vl">
             
                <p class="text-justify">
                    Esqueceu sua senha? Não têm problema, um email será enviado para você fornecendo a sua senha.
                    Por favor, coloque no campo a esquerda o seu email cadastrado no nosso site!
                    Caso não possua cadastro, basta clicar abaixo para se cadastrar.
                </p>
                <p class="text-center">
                    <a href="cadastro.php">Clique AQUI e faça seu cadastro.</a>
                </p>
               <p class="text-center">
                    Caso não deseje se cadastrar, <a href="contato.php">Clique AQUI</a> para que possa
                    visualizar nossos meios de contatos.
                </p>
             </div>
            </div>
            </div>
        <!-- rodapé -->
    <footer class="cor-botao p-4" >
    <div class="botao btn btn bg-white p-0 mr-2">
        <a href="https://www.facebook.com/juanapersonalizacoes/?ref=settings"><img src="img/social/facebook.png" alt="" ></a>
    </div>
    <div class="btn btn bg-white p-0">
    <a href="https://web.telegram.org/#/im?p=u777000_4041729175755639182"><img src="img/social/telegram.png" alt=""></a>
    </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>