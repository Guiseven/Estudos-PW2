<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou IMpar</title>
</head>
<body>
<?php

$numero = $_GET['txtNumero'];

// Verificar se o número é positívo ou negatívo

function pos_neg($num){
    if($num > 0){
        return "Positívo";
}
else{
return "Negatívo";


}


}
echo pos_neg($numero);

?>
    
</body>
</html>




<!-- $valor = $_POST['txtValor']

//Função para Par
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


