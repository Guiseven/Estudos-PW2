

!

<?php

//Função Mensagem
function mensagem(){
    echo "Minha primeira função PHP";
}

// Chamar a função "mensagem"
mensagem();
echo"<hr>";


// Funcão com Parâmetros
function ola ($nome){
    echo "Olá ".$nome;

}

Ola ("Professor");
echo"<hr>";

function soma($a,$b){
    echo"$a + $b =";
    echo $a+$b;

}
echo "<h3>Soma de dois valores</h3>";
soma(5,7);

//Função com retorno de valores

function areaRet($base, $altura){
    $area = $base * $altura;
    return $area;

}
echo "<h4>Área do retângulo</h4>"
echo "Area = "areaRet(3,2)."m²";


?>