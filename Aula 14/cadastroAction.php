<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-PHP</title>
</head>
<body>
    <?php // CADASTRO PHP

        // Criar a conexão com o BD
        $nomeServidor = "localhost";
        $nomeUsuario = "root";
        $senha = "2904baroque";
        $nomeBd = "pw2";




        $conexao = new mysqli($nomeServidor,$nomeUsuario,$senha,$nomeBd);
            if($conexao->connect_error){
                die("Falha no conexão: ".$conexao->connect_error);
            }

        // Variáveis que representam os campos do formulário (nome,idade,nascimento)
       $nome = $_POST['txtNome'];
       $idade = $_POST['txtIdade'];
       $nascimento = $_POST['txtNascimento'];

        //Exucutar o comando de cadastro (Insert Into)
       $sqlInserir = "INSERT INTO aluno (nome,idade,nascimento) VALUES('$nome',$idade,'$nascimento')";

       if($conexao->query($sqlInserir) == true ){
           echo"
            <button>Aluno cadastrado com sucesso!</button>
           ";
       } else{
        echo"
            <button>Falha ao cadastrar!</button>
         ";
       }
       $conexao->close();
    ?>
</body>
</html>