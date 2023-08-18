<?php

/*
O PHP 8 introduziu a possibilidade de alterar a ordem dos argumentos quando chamamos uma função

é um conceito designado named arguments
*/

function apresentar($a, $b, $c = 100){
    return "$a | $b | $c";
}

echo apresentar(10,20) . '<br>'; //10 | 20 | 100
echo apresentar(10,20,30) . '<br>'; //10 | 20 | 30
echo apresentar(c:1,b:2,a:3) . '<br>'; //3 | 2 | 1

//se quisermos misturar conceitos, os valores não nomeados devem vir sempre primeiro:

echo apresentar(10, c:1, b:2000); //10 | 2000 | 1
