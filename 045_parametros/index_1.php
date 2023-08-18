<?php

// PARÂMETROS DE UMA FUNÇÃO

/**
 * Podemos passar valores (argumentos) para o interior de uma função
 * 
 * parâmetros são variáveis indicadas dentro dos parênteses da função e que vão estar disponívels para serem utilizados dentro da função
 * 
 * argumentos são os valores que passamos para o interior dessa função
 */

 function adicionar($a, $b){
    return $a + $b;
 }

 echo adicionar(100, 50);

/*
Adicionar - nome da função
$a e $b são os parâmetros. São separados por vírgulas. Ao chamar a função, o valor 100 e o valor 50 são designados por argumentos
O 100 será atribuído ao parâmetro $a e o 50 ao parâmetro $b
*/