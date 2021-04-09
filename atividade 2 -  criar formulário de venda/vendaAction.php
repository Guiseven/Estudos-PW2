<!DOCTYPE html>
<html lang="pt-br">
    <link rel="stylesheet" href="estilovenda.css">
  <head>
    <title>Vendas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilovenda.css">
  </head>
  
  <body>
    <div class="titulo"><h1>Dados das Vendas</h1></div>
    <div id="aluno"> 

    <?php
    $nome=$_POST['txtVendedor'];
    $valor=$_POST['nbrValor'];
    $vendas=$_POST['sltequipamentos'];
   


    echo "Vendedor:".$nome. "<br>";
    echo "Valor:".$valor. "<br>";
    echo "venda:".$vendas. "<br>";
   
   

    



?>
</div>
<br>
<br>
<div class="imgVendedor">
<img src="imagem_vendedor.png" alt="Vendedor">
</div>
<br>
<br>
<p> 

<a href="venda.php"> <input type="button" value=" << Voltar"></a>


</p>



    




<p>



</p>
  </body>
</html>