<?php

//DO WHILE

//a diferença para o while é que nesse caso, o bloco é executado pelo menos 1 vez e depois a condição é avaliada

$valor = 11;

do {
    echo "3 x $valor = " . $valor * 3 . "<br>";
} while ($valor <= 10);

//se o valor for 11, ainda assim o bloco será executado uma vez