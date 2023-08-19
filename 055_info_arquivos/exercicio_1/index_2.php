<?php

echo '<pre>';

/*
Uma das formas mais diretas de criar e escrever informação num arquivo é recorrer à função:
    file_put_contents()
*/

//se o arquivo não existe, é criado.
//o conteúdo vai ser substituido
file_put_contents('file1.txt', 'texto do arquivo');

//se pretendemos adicionar informação ao mesmo arquivo, usamos o terceiro argumento.
file_put_contents('file2.txt', time() . PHP_EOL, FILE_APPEND);
echo 'terminado';