<?php

/*
também podemos usar funções callback para criar nosso próprio filtro
*/

function apenas_3_chars($value)
{
    if (strlen($value) < 3) {
        return "[]";
    } else {
        return substr($value, 0, 3);
    }
}

$valor = "rogerio peres";
// $valor = "a";

$final = filter_var($valor, FILTER_CALLBACK, ['options' => 'apenas_3_chars']);

echo $final;
