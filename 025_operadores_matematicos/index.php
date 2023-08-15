<?php

//OPERADORES

//um operador é algo que recebe um ou mais valores (expressões) e que retorna outro valor
echo '<pre>';

echo 10 + 20;
echo '<br>';

//os operadores podem ser agrupados da seguinte forma:
    /*
        - envolve um valor -> operador unário
        - envolve dois valores -> operador binário (maior parte dos operadores)
        - envolve três valores -> operador ternário
    */

//OPERADORES MATEMÁTICOS
//  +  -  *  /  %  **
$x = 10;
$y = 2;
var_dump($x + $y);
var_dump($x - $y);
var_dump($x * $y);
var_dump($x / $y);
var_dump($x % $y);
var_dump($x ** $y);

var_dump(-10); // retorna um int
var_dump("10"); // retorna uma string
var_dump(+"10"); // retorna um int

var_dump(10 / 2);
var_dump(10 / 3);
var_dump(10 / 2.0);

//var_dump(10 / 0); ERRO! divisão por zero
//para evitar o erro
var_dump(fdiv(10,0)); // retorna INF -> float div

//cuidado com módulos
var_dump(10 % 2); 
var_dump(10 % 3); 
var_dump(10 % 6); 
var_dump(10.5 % 3.2); //deprecated
var_dump(fmod(10.5, 3.2)); // float mod
//os valores envolvidos na operação são sempre modificados para int
//para valores float são removidas as casas decimais
