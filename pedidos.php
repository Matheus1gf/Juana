<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css"> 
    <title>Página de pedidos</title>
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
      </div>
    <!-- Fim da Logo -->

    
    
    <!-- Caixa de pedidos -->
    <div class="container" id="container-pedidos">
        
    
    <h2 id="pag-pedidos">Página de pedidos</h2>
    <hr>
    <h3>Item</h3>

    <form action="mailto:testejuana@gmail.com" method="post">
        <div id="itens">
            <input type="radio" id="item" value="item-caneca" onchange="mostra()"> Caneca
            <input type="radio" id="item" value="item-chinelo"> Chinelo
            <input type="radio" id="item" value="item-camisa"> Camisa
            <input type="radio" id="item" value="item-bolsa"> Bolsa
            <input type="radio" id="item" value="item-outros"> Outros
        </div>
        <script>
        function mostra(){
            var tipo = document.getElementById("item").value;
            
            if(tipo==="item-caneca"){
             document.getElementById("Caneca").style.display = "block";   
            }
        }
        </script>
   
        <!-- Caixas de Tipos de Itens -->
        
        
        <!-- Canecas -->
        
        <div id="Caneca">
            <h3>Tipo</h3>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-comum">
              <label class="form-check-label" for="defaultCheck1"> Caneca Comum </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-magica">
              <label class="form-check-label" for="defaultCheck1"> Caneca Mágica </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-colorida">
              <label class="form-check-label" for="defaultCheck1"> Caneca com alça colorida </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-tarjabranca">
              <label class="form-check-label" for="defaultCheck1"> Caneca com tarja branca </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-chop">
              <label class="form-check-label" for="defaultCheck1"> Caneca de chop </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-cromada">
              <label class="form-check-label" for="defaultCheck1"> Caneca cromada </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-fundo">
              <label class="form-check-label" for="defaultCheck1"> Caneca de fundo colorido </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-metalizada">
              <label class="form-check-label" for="defaultCheck1"> Caneca metalizada  </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="squeeze">
              <label class="form-check-label" for="defaultCheck1"> Squeeze </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="copo-japones">
              <label class="form-check-label" for="defaultCheck1"> Copo Japonês </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="copo-cafe">
              <label class="form-check-label" for="defaultCheck1"> Copo de Café </label>
            </div>
        </div>
        
    <!-- Chinelo -->
        
        <div id="Chinelo">
            <h3>Tipo</h3>
             <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Chinelo infantil </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Chinelo adulto </label>
            </div>
        </div>
        
    <!-- Camisa -->
        
    
         <div id="Camisa">
             <h3>Tipo</h3>
             <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Camisa infantil </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Camisa adulto </label>
            </div>
        </div>
    
    <!-- Bolsa -->
        
    
         <div id="Bolsa">
             <h3>Tipo</h3>
             <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Bolsa comum </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Bolsa esportiva </label>
            </div>
        </div>
    
    <!-- Outros -->
    <div id="Outros">
        <h3>Outros Itens</h3>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">Avental</label>
        </div>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">Azuleijo</label>
        </div>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">Chaveiro comum</label>
        </div>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">Chaveiro espumado</label>
        </div>
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">Quebra-cabeças</label>
        </div>
    </div>
    
    <!-- Outros-tipos -->
    <!-- Azuleijos -->    
    
    <div id="Azuleijo">
             <h3>Tipo</h3>
             <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> azuleijo simples </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Azuleijo com relogio</label>
            </div>
    </div>
    
    <!-- Chaveiro comum -->
    
    <div id="Chaveiro-comum">
             <h3>Tipo</h3>
             <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Chaveiro coração </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">Chaveiro Quadrado </label>
            </div>
             <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Chaveiro escudo </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Chaveiro osso</label>
            </div>
    </div>
    
    <!-- Chaveiro de espuma -->
    
       
     <div id="Chaveiro-espuma">
             <h3>Tipo</h3>
             <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Chaveiro de espuma coração </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Chaveiro de espuma redondo</label>
            </div>
    </div>
    
    <!-- Quebra-cabeças -->
    
    <div id="Quebra-cabecas">
         <h3>Tipo</h3>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Quebra-cabeças de coração ( 10 peças ) </label>
            </div>
         <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Quebra-cabeças de coração ( 52 peças ) </label>
            </div>
         <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Quebra-cabeças de coração ( 75 peças ) </label>
            </div>
         <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Quebra-cabeças oval ( 51 peças ) </label>
            </div>
         <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Quebra-cabeças redondo ( 41 peças ) </label>
            </div>
         <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Quebra-cabeças retangular ( 12 peças ) </label>
            </div>
         <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Quebra-cabeças retangular ( 24 peças ) </label>
            </div>
         <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Quebra-cabeças retangular ( 48 peças ) </label>
            </div>
         <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1"> Quebra-cabeças retangular ( 80 peças )  </label>
            </div>
           
    </div>
    
    
    <table width="32%" border="0" align="text-left">
    <tr>
    <td><div align="right" class="texto">Anexo</div></td>
    <td><input name="arquivo" type="file"></td>
    </tr>
    <tr>
    <td><div align="right" class="texto">Mensagem</div></td>
    <td><textarea name="mensagem" cols="50" rows="07" id="mensagem"></textarea></td><br>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" class="btn btn-success" name="Submit" value="Fazer pedido"></td>
    </tr>
    </table>
    
    
    
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
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>