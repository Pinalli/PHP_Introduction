<?php

$peso =  86;
$altura  = 1.81;
$imc = $peso / ($altura  * $altura); //  ($altura ** 2) exponencial

echo "IMC = $imc " . PHP_EOL;

echo "Seu IMC é de $imc. Você está com o IMC ";
if($imc < 18){
    echo "abaixo";
} elseif ($imc < 25){
    echo "dentro";
} else{
    echo "acima";
}
echo " do recomendado"; 