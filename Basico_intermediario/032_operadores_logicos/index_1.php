<?php

//OPERADORES LÓGICOS

//&&  ||  !  and  or

//servem para combinar várias condições na análise de valores. podemos usá-los para criar um conjunto de condições mais complexas

//&& - vai retornar true se todas as condições forem verdadeiras
$x = true;
$y = true;
var_dump($x && $y); //bool(true)

$x = 20;
$y = 10;
var_dump($x > 10 && $y < 20); //bool(true)
var_dump($x > 100 && $y < 200); //bool(false)
echo '<br>';

//|| - vai retornar true se pelo menos uma das condições for verdadeira
$x = false;
$y = true;
var_dump($x || $y); //bool(true)

$x = 20;
$y = 10;
var_dump(10 > 1 || 10 > 200); //bool(true)
var_dump(2 < 1 || 3 < 2); //bool(false)
echo '<br>';

//! - operador de negação
$nome = "joao";
var_dump(!is_string($nome)); //bool(false) - $nome é uma string

//os operadores 'and' e 'or' tem comportamentos semelhantes ao && e ||

//o PHP implementa um afilosofia de shory circuit evaluation
var_dump(true || false);

//vai avaliar o primeiro true
//quando encontra o operador ||, verifica que já tem informação suficiente para definir que a condição é verdadeira, logo, não analisa o resto das condições