<?php

echo '<pre>';

//lista de arquivos
echo __DIR__ . '<br>';
$files = scandir(__DIR__); // constante mágica __DIR__
print_r($files);

/*
O . e o .. estão sempre presentes em cada pasta
São identificados como pasta atual (.) e a pasta anterior (..)
*/

echo '<hr>';
$files2 = scandir('./'); // lista a pasta atual
print_r($files2);

echo '<hr>';
$files3 = scandir('../'); // lista a pasta anterior
print_r($files3);

//Podemos questionar se cada elemento encontrando é um arquivo ou uma pasta
echo '<hr>';
foreach($files as $item){
    echo is_file($item) ? 'Arquivo' : 'Pasta'; //is_dir() idetifica se é pasta
    echo '<br>';
}

//se quisermos listar apenas os arquivos
echo '<hr>';
$files = scandir(__DIR__);
foreach($files as $item){
    if(is_file($item)){
        echo $item . '<br>';
    }
}