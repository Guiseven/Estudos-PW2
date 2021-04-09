<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro de Vendas</title>
    <meta charset="utf-8">
<link rel="stylesheet" href="estilovenda.css">
  </head>
  <body>
  
  <!--CADASTRO-->
  <div class="titulo"><h1> Cadastro do Vendedor(a)</h1></div>
    <form action="vendaAction.php"nome="form1" method="POST">
    <p>Vendedor <input type="text" name="txtVendedor" id="txtvendedor" required>      </p>
    
 <fieldset>
     <legend>Vendas efetuadas</legend>
    <p>Equipamentos de Informática
    <select name="sltequipamentos" id="vendas">
    <option value="Computador">COMPUTADOR</option>
    <option value="Impressora">IMPRESSORA</option>
    <option value="Datashow">DATASHOW</option>
    <option value=""></option>
    
    

    </select>
    
    </p>


    <label>
            Valor da Venda <br><input type="number" name="nbrValor">
        </label>
  
    
    </fieldset>
    <p>
    <!-- botão matricula-->

    <input type="submit" value="Enviar" name="sbmEnviar">
    
    </p>
    
    
    
    </form>
  </body>
</html> 