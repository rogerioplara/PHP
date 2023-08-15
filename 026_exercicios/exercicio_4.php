<?php

echo '<pre>';

/**
 * 1. define $a e $b com valor igual a 20
 * 2. define $c e $d com valor igual a 5
 * 3. apresenta o resultado da divisão de $a adicionado a $b
 * e depois dividindo esse resultado pela adição de $c e $d
 * 
 * Resultado: 4
 */

$a = $b = 20;
$c = $d = 5;

$resultado = ($a + $b) / ($c + $d);

echo "Resultado: {$resultado}";