<?php

/*
Salvar dentro de um arquivo de text a tabuada do 3 até a multiplicação por 1000.
3 x 1 = 3 ... 3 x 1000 = 3000
*/

file_put_contents('tabuada_3.txt', 'Tabuada do 3 x 1 ... 3 x 1000' . PHP_EOL);

for ($i=1; $i <= 1000; $i++) { 
    $resultado = "3 x $i = " . (3 * $i);
    file_put_contents('tabuada_3.txt', $resultado . PHP_EOL, FILE_APPEND);
}

file_put_contents('tabuada_3.txt', '-> FINALIZADO <-', FILE_APPEND);

echo 'Finalizado';