<?php

/*
Podemos importar os dois scripts que tem namespaces diferentes e usar
as duas classes com o mesmo nome, mas que pertencem a realidades distintas
*/

require_once('index_3.php');
require_once('index_4.php');

$operacoes_loja = new Loja\Operacoes();
$operacoes_armazem = new Armazem\Operacoes();

$operacoes_loja->operacao_1();
$operacoes_loja->operacao_2();

$operacoes_armazem->operacao_1();
$operacoes_armazem->operacao_2();
