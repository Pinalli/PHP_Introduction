<?php

$idade = 16;
$acompanhado = 0;

echo "Você só pode entrar se tiver mais de 18 anos ou";
echo " a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18 ){
    echo "Você tem $idade anos.\nEntão, pode entrar sozinho";
} else if ($idade >= 16 and $acompanhado >= 1){
    echo "Você  tem $idade anos, está acompanhado(a), então pode entrar";
} else{
    echo "Voce só tem $idade anos e não está acompanhado, não pode entrar";

}


