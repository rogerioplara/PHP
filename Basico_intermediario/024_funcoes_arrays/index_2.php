<?php

//FUNÇÕES ASSOCIADAS A ARRAYS

$cliente = [
    'nome' => "joao",
    'sobrenome' => "ribeiro",
    'idade' => 48,
    'email' => 'joao@gmail.com'
];

//apresentar um valor de um array associativo
echo $cliente['sobrenome'];
echo '<br>';

//verificar se existe uma determinada key no array
var_dump(key_exists('telefone', $cliente)); //bool(false)
echo '<br>';

//array para string
$resultado = implode(", ", $cliente);
var_dump($resultado); //joao,ribeiro,48,joao@gmail.com
echo '<br>';

//criar um novo array a partir de uma porção de outro array
$nomes = ["joao", "ana", "carlos", "francisco", "cristina"];
$nomes_parte = array_slice($nomes, 2); // ["carlos", "francisco", "cristina"]

//funções para arrays em PHP
//https://www.php.net/manual/en/ref.array.php