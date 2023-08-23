<?php

//PRECEDENCIA DE OPERADORES
//funciona maioritariamente como na matemática

$resultado = 10 + 20 * 4; //90

//pode-se forçar precedência usando parênteses
$resultado = (10 + 20) * 4; //120

$valor1 = 4;
$valor2 = 2;
$valor3 = 10;

//nesse caso será feito da esquerda para a direita
$resultado = $valor1 / $valor2 * $valor3;

echo $resultado;