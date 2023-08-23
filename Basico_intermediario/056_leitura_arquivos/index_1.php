<?php

/*
Existem várias formas de leitura de dados a partir de um arquivo de texto
file_get_contents()
*/

$dados = file_get_contents('dados.txt');
echo nl2br($dados);

echo '<hr>';

//podemos ler apenas uma parte do arquivo
$dados = file_get_contents('dados.txt', offset:6, length:40);
echo nl2br($dados);
//offset - onde iniciará a leitura
//length - até onde fará a leitura