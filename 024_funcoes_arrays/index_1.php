<?php

//FUNÇÕES ASSOCIADAS A ARRAYS

$nomes = ["joao", "ana", "carlos", "joaquim"];

//queremos saber se a variável é um array?
$resultado = is_array($nomes); //true

//queremos saber quantos elementos tem um array?
$resultado = count($nomes); //4

//adicionar valores no final do array
array_push($nomes, "fernando", "manuela");

//adicionar valores no inicio do array
array_unshift($nomes, "marcos");

//retirar um valor do final do array
$resultado = array_pop($nomes); // $resultado = "manuela"

//retitar um valor do inicio do array
$resultad = array_shift($nomes);

//eliminar um determinado elemento pelo indice
unset($nomes[0]); //remove o primeiro elemento do array