<?php

echo '<pre>';

//uma forma muito simples de obter o tamanho de um arquivo em bytes

$dados = filesize('registros.txt');
echo $dados . ' bytes';

echo '<hr>';

//e para obter várias informações sobre um determinado arquivo
$info = pathinfo('registros.txt');
print_r($info);