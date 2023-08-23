<?php

//OPERADORES DE COMPARACAO
// ==  ===  !=   <>   !==  <  >  <=  >=  <=>  ??  ?:
//operadores que permitem comparar valores de expressões e variáveis
//tipicamente os resultados são valores booleanos


//verificar se valores são iguais
//var_dump(10 = 20); -> apenas para atribuição de valores, não comparação
var_dump(5 == 5); //bool(true)
var_dump('Joao' == 'joao'); //bool(false)
var_dump("joao ribeiro" == "joao" . " " . "ribeiro"); //bool(true)

var_dump(10 == "10"); //bool(true)
//acontece uma conversão implícita de string para número, como resolver?

//comparar valor e tipo de dados
var_dump(10 === "10"); //bool(false)

var_dump(1 == true); //bool(true)
var_dump(1 === true); //bool(false)

//verificar se os valores são diferentes
var_dump(10 != 20); //bool(true)
var_dump(5 != 5); //bool(false)
var_dump(5 != "5"); //bool(false) -> valores iguais

var_dump(5 !== "5"); //bool(true) -> tipos diferentes

var_dump(20 <> 30); //equivalente a !=

//no PHP 8 temos o seguinte código:
var_dump(0 == "joao"); //uma vez que a string não pode ser convertida para numero, então o PHP retorna false

//operadores < > <= >=
var_dump(10 > 5); //bool(true)
var_dump(10 < 5); //bool(false)
var_dump(10 > 10); //bool(false)
var_dump(10 >= 10); //bool(true)
var_dump(10 <= 10); //bool(true)

//spaceship operator <=>
var_dump(20 <=> 10); //int(1)
var_dump(10 <=> 10); //int(0)
var_dump(10 <=> 20); //int(-1)
echo '<br>';

//operadores condicionais: ?? ?:

//operador ternário
$valor = "joao";
echo $valor == "joao" ? "SIM" : "NÃO"; // SIM
echo '<br>';

//null coalescent operator - operador de coalescência nulo
$valor = null;
$a = $valor ?? "OK"; //$a = "OK" -> não atribui valor a $a pois $valor é null, retorna OK
echo "$a" . '<br>';

$valor = 10;
$a = $valor ?? "OK"; //$a = 10 -> atribui a $a o valor de $valor pois não é null
echo "$a" . '<br>';