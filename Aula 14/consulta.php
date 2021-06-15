<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <div>
        <h1>Consulta de Alunos</h1>
        <?php // CONSULTA - SELECT
                $nomeServidor = "localhost";
                $nomeUsuario = "root";
                $senha = "2904baroque";
                $nomeBd ="pw2";
                



                $conexao = new mysqli ($nomeServidor,$nomeUsuario,$senha,$nomeBd);
                if($conexao->connect_error){
                    die("Falha na conexão: ".$conexao->connect_error);
                }
                echo "
                    <table border='1'>
                        <tr>
                            <th>RM</th>
                            <th>NOME</th>
                            <th>IDADE</th>
                            <th>NASCIMENTO</th>
                        </tr>
                ";
                $sqlSelect = "SELECT * FROM aluno";
                $consulta = $conexao->query($sqlSelect);
                if($consulta != NULL)
                    foreach($consulta as $registro){
                        echo "<tr>";
                            echo "<td>".$registro['rm']."</td>";
                            echo "<td>".$registro['nome']."</td>";
                            echo "<td>".$registro['idade']."</td>";
                            echo "<td>".$registro['nascimento']."</td>";
                        echo "</tr>";
                    }
                echo"</table>";
                $conexao->close();
        ?>
    </div>
    
</body>
</html>