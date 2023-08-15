<?php

//OPERADORES DE ATRIBUIÇÃO
// =  +=  -=  *=  /=  %=  **=

$x = 100;
$a = $b = $c = 200;
$x = ($y = 10) * 10; // não é recomendável esse tipo de escrita

$x = 10;
$x = $x * 2; // 20

$x = 1;
$x += 4; // 5

$x = 45;
$x -= 15; // 30

$x = 10;
$x *= 2; // 20

$x = 100;
$x /= 4; // 25

$x = 100;
$x %= 60; // 40

$x = 9;
$x **= 2; // 81

//cuidado, usar este operadores em variáveis que não estão definidas gera warning
$valor += 100;