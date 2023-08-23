<?php

/*
CSV - significa Comma Separated Values (valores separados por vírgula)
é um arquivo com uma estrutura particular que permite ser usada entre aplicações para transporte de dados. Excel, Libreoffice, Google Sheets, ...
*/

//Criar um arquivo CSV
$file = fopen('dados.csv', 'w');

//header das colunas
$header = ['Coluna A', 'Coluna B', 'Coluna C'];
fputcsv($file, $header);

//linhas
for($i = 1; $i <= 100; $i++){
    $linha = [rand(100, 999), rand(100, 999), rand(100, 999)];
    fputcsv($file, $linha);
}

fclose($file);