<?php

// STRINGS

/*
Um aspecto importante nas strings: o PHP tem muitas ferramentas para strings
*/

$frase = "Lorem ipsum dolor sit, amet consectetur adipisicing elit.";

// apresentar número de caracteres de uma string
echo strlen($frase) . '<br>';

// transformar todas as letras em maiúsculas
echo strtoupper($frase) . '<br>';

// apresentar apenas parte da frase -> do indice 0 ao 20º indice
echo substr($frase, 0, 20) . '<br>';

// verifica se uma palvra existe dentro da string -> retorna um bool 0 ou 1
echo str_contains($frase, 'consectetur');

