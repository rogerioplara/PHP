<?php

// ARRAYS
// variável que funciona como uma coleção de dados

$nome1 = "joao";
$nome2 = "ana";
$nome3 = "carlos";

$nomes = array("joao", "ana", "carlos");
// ou
$nomes = ["joao", "ana", "carlos"];

// como acessar cada elemento
echo $nomes[0]; // primeiro elemento da coleção
echo '<br>';
echo $nomes[2]; // terceiro elemento da coleção

// no caso anterior as chaves são atribuídas automaticamente
// porém podemos definir as nossas próprias chaves
echo '<br>';
$nomes = [
    10 => "joao",
    20 => "ana",
    30 => "carlos"
];

echo $nomes[20];

// se tentarmos acessar uma chave que não existe, surge um aviso

echo $nomes[100];

// para evitar o aviso, podemos verificar se o item existe
var_dump(isset($nomes[200])); // -> retorna um bool