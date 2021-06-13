<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro</title>
    <meta charset="utf-8">
<link rel="stylesheet" href="estiloAluno.css">
  </head>
  <body>
  
  <!--CADASTRO-->
  <div class="titulo"><h1> Cadastro do Aluno</h1></div>
    <form action="alunoAction.php"nome="form1" method="POST">
    <p>Aluno <input type="text" name="txtAluno" id="txtaluno" required>      </p>
    <p>Nascimento <input type="date" name="datNascimento"></p>
 <fieldset>
     <legend>MatrÍcula</legend>
    <p>Curso
    <select name="sltcurso" id="curso">
    <option value="Administração">ADMINISTRAÇÃO</option>
    <option value="Informática">INFORMÁTICA</option>
    <option value="Nutrição">NUTRIÇÃO</option>
    
    

    </select>
    
    </p>
    <p>
    <!-- Campo de Periodo-->
    Periodo
    <input type="radio" name="radPeriodo" value="Manhã">Manhã
    <input type="radio" name="radPeriodo" value="Tarde">Tarde
    <input type="radio" name="radPeriodo" value="Noite">Noite
    

    </p>
    </fieldset>
    <p>
    <!-- botão matricula-->

    <input type="submit" value="Matricula" name="sbmMatricular">
    
    </p>
    
    
    
    </form>
  </body>
</html> 