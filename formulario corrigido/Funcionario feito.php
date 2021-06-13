<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Funcionario</title>
    <meta charset="utf-8">

 <style>
     body{font-family: Arial, Helvetica, sans-serif}
     .content{display:flex ;justify-content:center;}
     .contato{width: 100%;max-width: 500px;}
     .form{display:flex;flex-direction: column;}
     .field{padding: 10px;margin-bottom: 15px;border: 1px solid #ddd;border-radius: 5px;font-family: Arial, Helvetica, sans-serif;font-size: 16px; }
     textarea{height: 150px;}
      





 </style>














  </head>
  <body>

<section class="content">

          <div class="contato">
<h3  id="titulo">Formulário de Funcionario</h3>
<p id="subtitulo"> <Strong>Preencha seus dados</Strong> </p>
<br>

     <form class="form" method="POST"action="./dadosfunc.php">  

     <input class="field" name = "nome" placeholder = "Nome" required ><br>
     <input class="field" name = "idade" placeholder = "Idade" required > <br>
     <input class="field" name = "estadocivil" placeholder = "Estado Civil"> <br>
     <input class="field" name = "cargo" placeholder = "Cargo"> <br>
     <input class="field" name = "salario" placeholder = "Salário"> <br>


 <input class ="field"    type="submit" value="Enviar">




     </form>

       </div>
</section>
