<?php

require_once('index_6.php');

use Estruturas_principais\Loja;
use Estruturas_principais\Armazem;

$loja = new Loja();
$armazem = new Armazem();

//sempre que quiser criar novos objetos dentro deste script, não tem 
//a necessidade de fazer da seguinte forma:
$loja_1 = new Estruturas_principais\Loja();
$loja_2 = new Estruturas_principais\Loja();
$loja_3 = new Estruturas_principais\Loja();

//pode simplesmente escrever
$loja_1 = new Loja();
$loja_2 = new Loja();
$loja_3 = new Loja();
