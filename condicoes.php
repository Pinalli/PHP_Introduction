<?php
/*
OPERADOR TERNARIO
https://www.php.net/manual/en/language.operators.comparison.php
*/

$idade = 16;
$acompanhado = 1;

echo "Você só pode entrar se tiver mais de 18 anos ou";
echo " a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18 ){
    echo "Você tem $idade anos.\nEntão, pode entrar sozinho";
} else if ($idade >= 16 and $acompanhado >= 1){
    echo "Você  tem $idade anos, está acompanhado(a), então pode entrar";
} else {
    echo "Voce só tem $idade anos e não está acompanhado, não pode entrar";

}

echo PHP_EOL;
echo "Fechando o sistema"; 

/* SEM CHAVES FAZ A MESMA COISA, SOMENTE PARA CADA LINHA DE INSTRUCAO
MELHOR É UTLIZAR AS CHAVES EM CASO DE MAIS INSTRUÇOES NA LINA DE CÓDIGO
if ($idade >= 18 )
    echo "Você tem $idade anos.\nEntão, pode entrar sozinho";
 else if ($idade >= 16 and $acompanhado >= 1)
    echo "Você  tem $idade anos, está acompanhado(a), então pode entrar";
 else 
    echo "Voce só tem $idade anos e não está acompanhado, não pode entrar";



echo PHP_EOL;
echo "Fechando o sistema"; */

/*
Podemos tomar uma decisão no código através do if, elseif e else
if e elseif vão avaliar uma condição, se for verdadeira executam o bloco associado
O if é o primeiro comando, elseif e else são opcionais
O bloco elseif sempre precisa de um if antes
O bloco else sempre precisa de um if ou elseif antes 
O bloco else só executa se nenhuma das condições anteriores forem verdadeiras
Através do && (AND lógico) e do || (OR lógico) podemos avaliar mais de uma condição
*/