<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body> <!-- CADASTRO -->
    <h1>Cadastro de Alno</h1>
    <form action="cadastroAction.php" method="post">
        <p>
            <label for="nome">
                Nome <input type="text" id="nome" name="txtNome" autocomplete="off" required>
            </label>
        </p>

        <p>
            <label for="idade">
                Idade <input type="text" id="idade" autocomplete="off" name="txtIdade">
            </label>
        </p>

        <p> 
            <label for="nascimento">
                Nascimento <input type="date" id="nascimento" name="txtNascimento">
            </label>
        </p>
        <button name="btnCadastrar">Cadastrar</button>
    </form>
</body>
</html>