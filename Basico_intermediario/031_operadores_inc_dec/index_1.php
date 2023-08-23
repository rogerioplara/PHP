<?php

//OPERADORES DE INCREMENTO E DECREMENTO
//++  --

//permite incrementar ou decrementar um valor em uma unidade
//pode ser usado como pré-incremento ou pós-incremento

$x = 10;

//pós
$x++;
$x--;

//pré
++$x;
--$x;

//resultados

$x = 100;
echo $x++; //vai apresentar o valor 100 e passar a variável para 101
echo '<br>';
echo $x--; //vai apresentar o valor 101 e passar a variável para 100
echo '<br>';

echo ++$x; //vai passar a variável para 101 e apresentar 101
echo '<br>';
echo --$x; //vai passar a variável para 100 e apresentar 100
echo '<br>';

//estes operadores devem ser utilizados apenas nos valores numéricos