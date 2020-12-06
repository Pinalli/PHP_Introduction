<?php

/* for($listaDeNumeros = 1; $listaDeNumeros <= 15; $listaDeNumeros++){
 // não mostrar um numero específico
    if($listaDeNumeros == 13) {
        continue;
    }
    echo "#$listaDeNumeros" . PHP_EOL;
} */

for($listaDeNumeros = 1; $listaDeNumeros <= 15; $listaDeNumeros++){
    // Para a condição antes da condição inicial
       if($listaDeNumeros == 13) {
       break;
       }
       echo "#$listaDeNumeros" . PHP_EOL;
   }
   /*
Existem algumas variações de laços, dentre elas:
while que possui uma condição de entrada
do-while que possui uma condição de permanência (sempre executa o bloco pelo menos uma vez)
for que possui a declaração de uma variável, uma condição entrada e o increment
Dentro do bloco do laço podemos pular uma interação com o comando continue
Com o comando break podemos sair do laço
A variável contador normalmente se chama i
   */