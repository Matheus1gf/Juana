
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       
        <title></title>
        <style>
            .vl {
                
                border-left: 3px solid lightgray;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Login</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <form action="validarlogin.php" method="POST">
                        <div class="form-group">
                              <input type="email" class="form-control" name="login" id="login" aria-describedby="emailLogin" placeholder="Seu e-mail">
                        </div>
                        <div class="form-group">
                              <input type="password" class="form-control" name="senha" id="entreSenha" placeholder="Sua senha">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="lembrarLogin">
                            <label class="form-check-label" for="exampleCheck1">Lembrar meu login</label>
                        </div>
                      <button type="submit" class="btn cor-botao btn-lg">Entrar</button>
                    </form>
                </div>     
                           
                
             <div class="col-md-6 vl">
             
                <p class="text-justify">
                    Porque se cadastrar no nosso site? Tenha mais facilidade
                    em executar seus pedidos e nos enviar a decoração que desejar
                    em nossos produtos. Nós da juana personalizaçôes buscamos sempre
                    o maior conforto e melhor atendimento aos nossos clientes.
                    Junte-se a nós e se CADASTRE logo abaixo.
                </p>
                <p class="text-center">
                    <a href="cadastro.html">Clique AQUI e faça seu cadastro.</a>
                </p>
               <p class="text-center">
                    Caso não deseje se cadastrar, <a href="contato.html">Clique AQUI</a> para que possa
                    vizualizar nossos meios de contatos.
                </p>
 
         </div>       
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>