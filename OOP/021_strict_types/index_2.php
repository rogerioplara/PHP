<?php

/*
Para que o PHP obrigue a passar argumentos que correspondem ao tipo de dado esperado, temos que ativar o strict_types = 1
*/

declare(strict_types=1);

function apresentar1($mensagem)
{
    echo "Mensagem: {$mensagem}<br>";
}

//adicionar o tipo do argumento
function apresentar2(String $mensagem)
{
    echo "Mensagem: {$mensagem}<br>";
}

apresentar1("Mensagem do tipo string");
// apresentar2(100);

// agora é gerado um erro