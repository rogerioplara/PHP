<?php

//ARRAYS
//como adicionar e remover valores

$nomes = ["joao", "ana", "carlos"];

//add (push)
$nomes[] = "novo nome";
//adiciona ao final do array

//ou
array_push($nomes, "pedro");
array_push($nomes, "rui", "carla", "marta");
echo '<pre>';
print_r($nomes);
echo '</pre>';

//remover elemento (a chave vai desaparecer)
unset($nomes[5]);
echo '<pre>';
print_r($nomes);
echo '</pre>';

//existem dezenas de funções para operar arrays
//verificar a documentação
