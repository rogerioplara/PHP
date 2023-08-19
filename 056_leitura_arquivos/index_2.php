<?php

/*
em muitas circunstâncias necessitamos de uma leitura diferente dos dados.
Ler uma linha de cada vez, por exemplo
*/

$file = fopen('dados.txt', 'r'); // a variável $file serve como ponteiro para o arquivo que fica aberto -> a letra 'r' significa READ

//feof() -> file end of file
while(!feof($file)){
    //fgets() -> file gets uma linha de cada vez
    echo fgets($file) . '<br>';
}
fclose($file);

//ou

echo '<hr>';
$file = fopen('dados.txt', 'r');
while(($linha = fgets($file)) !== false) {
    echo $linha . '<br>';
}
fclose($file);