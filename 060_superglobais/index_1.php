<?php

//SUPER GLOBAIS
/*
São variáveis em forma de arrays que estão sempre disponíveis durante
a execução do código e às quais podemos chamar e manipular em qualquer escopo
da aplicação
*/

/*
Todas as variáveis que tem um escopo global podem ser acessadas pela superglobal 
$GLOBALS
*/

$nome = "joao";

apresentar();

echo $nome . '<br>';
echo $sobrenome;

function apresentar(){
    global $nome;
    echo $nome . '<br>';

    //ou

    echo $GLOBALS['nome'] . '<br>';

    //podemos alterar o valor da variável global.
    $GLOBALS['nome'] = "carlos";
    $GLOBALS['sobrenome'] = "ribeiro";

    //IMPORTANTES: existem algumas alterações que não podemos fazer
    //$GLOBALS = [];
}

