<?php

/*
Neste caso a variável $nome terá duas versões:
Uma global que existe ao longo do script
Outra local que é criada e terminada dentro do bloco da função
*/

$nome = 'joao';

function dados(){
    $nome = 'joaquim';
}

dados(); //a função não retorna nada, apesar de ter a variável $nome no seu escopo

echo $nome;

