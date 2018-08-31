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

    
    
    <!-- Caixa de pedidos -->
    <div class="container" id="container-pedidos">
        
    
    <h2 id="pag-pedidos">Página de pedidos</h2>
    <hr>
    <h3>Item</h3>

    <form action="mailto:testejuana@gmail.com" method="post">
        <div id="itens">
            <div class="form-check-inline">
            <input type="radio" id="item-caneca" name="item"> Caneca
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-chinelo" name="item" > Chinelo
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-camisa" name="item" > Camisa
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-bolsa" name="item"> Bolsa
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-outros" name="item"> Outros
            </div>
        </div>
       <script>
        $("#item-caneca").click(function(){
            $("#Caneca").toggle();
            $("#Chinelo").hide();
            $("#Camisa").hide();
            $("#Bolsa").hide();
            $("#Outros").hide();
        });
        $("#item-chinelo").click(function(){
            $("#Chinelo").toggle();
            $("#Caneca").hide();
            $("#Camisa").hide();
            $("#Bolsa").hide();
            $("#Outros").hide();
        });
        $("#item-camisa").click(function(){
            $("#Camisa").toggle();
            $("#Chinelo").hide();
            $("#Caneca").hide();
            $("#Bolsa").hide();
            $("#Outros").hide();
        });
        $("#item-bolsa").click(function(){
            $("#Bolsa").toggle();
            $("#Chinelo").hide();
            $("#Camisa").hide();
            $("#Caneca").hide();
            $("#Outros").hide();
        });
        $("#item-outros").click(function(){
            $("#Outros").toggle();
            $("#Chinelo").hide();
            $("#Camisa").hide();
            $("#Bolsa").hide();
            $("#Caneca").hide();
        });
        $("#item-avental").click(function(){
            $("#Avental").toggle();
            $("#Azuleijo").hide();
            $("#Chaveiro-comum").hide();
            $("#Chaveiro-espumado").hide();
            $("#Quebra-cabecas").hide();
        });
               
       
    </script>
   
        <!-- Caixas de Tipos de Itens -->
        
        
        <!-- Canecas -->
        
        <div id="Caneca">
            <h3>Tipo</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="caneca" id="caneca-comum"> Caneca comum          
            </div>
            
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="caneca-magica"> Caneca Mágica          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="caneca-alcacolorida"> Caneca com alça colorida          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="caneca-tarjabranca"> Caneca com tarja branca          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="caneca-chopp"> Caneca de chopp          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="caneca-cromada"> Caneca cromada          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" id="caneca-fundocolorido"> Caneca de fundo colorido          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="caneca-metalizada"> Caneca metalizada          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="squeeze"> Squeeze         
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="copo-japones"> Copo japonês          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="caneca" id="copo-café"> Copo de café          
            </div>
        </div>
        
    <!-- Chinelo -->
        
        <div id="Chinelo">
            <h3>Tipo</h3>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="chinelo" id="chinelo-infantil"> Chinelo infantil          
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="chinelo" id="chinelo-adulto"> Chinelo adulto          
            </div>
        </div>
        
    <!-- Camisa -->
        
    
         <div id="Camisa">
             <h3>Tipo</h3>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="camisa" id="camisa-infantil"> Camisa infantil          
            </div>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="camisa" id="camisa-adulto"> Camisa adulto          
            </div>
        </div>
    
    <!-- Bolsa -->
        
    
         <div id="Bolsa">
             <h3>Tipo</h3>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="bolsa" id="bolsa-comum"> Bolsa comum          
            </div>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="bolsa" id="bolsa-esportiva"> Bolsa esportiva         
            </div>
        </div>
    
    <!-- Outros -->
    
    <div id="Outros">
        <h3>Outros Itens</h3>
        <div class="form-check-inline">
            <input type="radio" id="item-avental" name="outros"> Avental
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-azuleijo" name="outros" > Azuleijo
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-chaveirocomum" name="outros" > Chaveiro comum
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-chaveiroespumado" name="outros"> Chaveiro espumado
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-quebracabecas" name="outros"> Quebra-cabeças
            </div>
    </div>
    
    <!-- Outros-tipos -->
    <!-- Avental -->
     <div id="Avental">
             <h3>Tipo</h3>
            <div class="form-check-inline">
            <input type="radio" id="item-avental" name="avental"> Avental Comum
            </div>
            <div class="form-check-inline">
            <input type="radio" id="item-avental" name="avental"> Avental com bolso
            </div>
    </div>
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
    <td><input type="submit" class="btn btn-success  cor-botao text-white" name="Submit" value="Fazer pedido"></td>
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