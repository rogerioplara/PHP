<?php

/*
é possível acessar dentro de uma função uma variavel global.
*/

$nome = 'joao';

function dados(){
    global $nome;
    $nome = 'joaquim';
}

dados();

echo $nome;

//IMPORTANTE: A melhor opção é usar os parâmetros nas funções