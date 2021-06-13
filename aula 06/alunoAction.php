<!DOCTYPE html>
<html lang="pt-br">
    <link rel="stylesheet" href="estiloAluno.css">
  <head>
    <title>Aluno</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estiloAluno.css">
  </head>
  
  <body>
    <div class="titulo"><h1>Dados do Aluno</h1></div>
    <div id="aluno"> 

    <?php
    $nome=$_POST['txtAluno'];
    $nascimento=$_POST['datNascimento'];
    $curso=$_POST['sltcurso'];
    $periodo=$_POST['radPeriodo'];

    echo "Aluno:".$nome. "<br>";
    echo "Nascimento:".$nascimento. "<br>";
    echo "Curso:".$curso. "<br>";
    echo "Período:".$periodo;


    



?>
</div>
<div class="imgAluno">
<img src="imagem_aluno.png" alt="Aluno">
</div>
<p> 

<a href="aluno.php"> <input type="button" value=" << Voltar"></a>


</p>



    




<p>



</p>
  </body>
</html>