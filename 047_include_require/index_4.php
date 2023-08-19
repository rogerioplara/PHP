<?php

/*
Podemos criar um script que contém funções, importar e chamar as funções
*/

require_once('functions.php'); //o require ou include deve estar no início do arquivo, caso contrário pode não estar disponível para utilização ao longo do código

echo adicionar(20,5) . '<br>';
echo subtrair(20,5) . '<br>';
echo multiplicar(20,5) . '<br>';
echo dividir(20,5) . '<br>';