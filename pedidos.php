<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css"> 
    <title>Página de pedidos</title>
  </head>
  
    <h2>Página de pedidos</h2>
    <hr>
    <h3>Item</h3>
   
    
<!-- Caixas de seleção de itens -->
<form action="mailto:testejuana@gmail.com" method="post">
    <div class="form-group">
      <label for="caixa-itens">Selecione o Item de sua preferência</label>
      <select class="form-control" id="caixa-itens" style="width: 110px">
          <option value="item-caneca" >Caneca</option>
          <option value="item-chinelo">Chinelo</option>
          <option value="item-camisa">Camisa</option>
          <option value="item-bolsa">Bolsa</option>
          <option value="item-outros">Outros</option>
      </select>
    </div>
    <!-- Caixas de Tipos de Itens -->
        
        
        <!-- Canecas -->
        
        <div id="Caneca">
            <h3>Tipo</h3>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-comum">
              <label class="form-check-label" for="caneca-comum"> Caneca Comum </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-magica">
              <label class="form-check-label" for="caneca-magica"> Caneca Mágica </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-colorida">
              <label class="form-check-label" for="caneca-colorida"> Caneca com alça colorida </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-tarjabranca">
              <label class="form-check-label" for="caneca-tarjabranca"> Caneca com tarja branca </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-chop">
              <label class="form-check-label" for="caneca-chop"> Caneca de chop </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-cromada">
              <label class="form-check-label" for="caneca-cromada"> Caneca cromada </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-fundo">
              <label class="form-check-label" for="caneca-fundo"> Caneca de fundo colorido </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="caneca-metalizada">
              <label class="form-check-label" for="caneca-metalizada"> Caneca metalizada  </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="squeeze">
              <label class="form-check-label" for="squeeze"> Squeeze </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="copo-japones">
              <label class="form-check-label" for="copo-japones"> Copo Japonês </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="copo-cafe">
              <label class="form-check-label" for="copo-cafe"> Copo de Café </label>
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
    <td><input type="submit" class="btn btn-success" name="Submit" value="Fazer pedido"></td>
    </tr>
    </table>
    
</form>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</html>