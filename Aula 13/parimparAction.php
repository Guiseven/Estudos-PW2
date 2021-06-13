<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar</title>
</head>
<body>
    

<?php
$valor = $_POST['txtValor']

// Função para Par
function par($numm){
    return"Par"
}
//Função para Impar
function impar(){
    return"Impar"
}

if($valor % 2 ==0){
    echo par($valor);
}

else{
    echo impar();
}
?>
</body>
</html>