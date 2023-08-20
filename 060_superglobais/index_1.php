<?php

//SUPER GLOBAIS
/*
São variáveis em forma de arrays que estão sempre disponíveis durante
a execução do código e às quais podemos chamar e manipular em qualquer escopo
*/

$nome = "joao";

apresentar();

echo $nome . '<br>';
echo $sobrenome;

function apresentar(){
    global $nome;
    echo $nome . '<br>';
}