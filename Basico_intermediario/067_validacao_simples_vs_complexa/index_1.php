<?php

// A SIMPLES E COMPLEXA VALIDAÇÃO DE DADOS

/*

Como vimos anteriormente, a validação de formulários é de 
extrema importância para impedir problemas no fluxo do código.
No entanto, a validação de formulários não é o único processo que 
é necessário validar dados.

Por exemplo, podemos carregar inforamções a partir de um arquivo
de dados, ou de uma base de dados e podemos ter a necessidade
de analisar, por exemplo, se um email é válido, ou, se uma
determinada string é um valor numérico.

A validação de um determinado dado pode ser mais simples,
usando funções existentes no PHP para essa validação,
ou com a necessidade de recorrermos a expressões regulares.

*/

//validar se o valor é uma string
$valor1 = "joao";
$valor2 = 123;
var_dump(is_string($valor1)); //bool(true)
echo '<br>';
var_dump(is_string($valor2)); //bool(false)

echo '<hr>';

//validar se o valor é numérico
$valor1 = "joao";
$valor2 = 123;
$valor3 = 13.5;
$valor4 = true;
var_dump(is_numeric($valor1)); //false
echo '<br>';
var_dump(is_numeric($valor2)); //true
echo '<br>';
var_dump(is_numeric($valor3)); //true
echo '<br>';
var_dump(is_numeric($valor4)); //false
echo '<hr>';

//validar se é um valor booleano
$valor1 = "false";
$valor2 = false;
$valor3 = 0;
var_dump(is_bool($valor1)); //false
echo '<br>';
var_dump(is_bool($valor2)); //true
echo '<br>';
var_dump(is_bool($valor3)); //false
echo '<hr>';

//validar se uma variável está vazia
$valor1 = "texto";
$valor2 = "";
$valor3 = 0;
$valor4 = 1;
$valor5 = [];
var_dump(empty($valor1)); //false
echo '<br>';
var_dump(empty($valor2)); //true
echo '<br>';
var_dump(empty($valor3)); //true
echo '<br>';
var_dump(empty($valor4)); //false
echo '<br>';
var_dump(empty($valor5)); //true
echo '<hr>';