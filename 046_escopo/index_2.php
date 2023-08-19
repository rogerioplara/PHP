<?php

//ESCOPO DE VARIÁVEIS

//a variável não estará acessível dentro de uma função

$nome = 'joao';

function executar(){
    echo $nome; //undefined
}

executar();

/*
Todas as variáveis dentro de uma função tem escopo local, existem apenase dentro da função
são criadas e destruidas na execução da função
*/

function adicionar(){
    $a = 100;
}

echo $a; //undefined