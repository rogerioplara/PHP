<?php

//__DIR__

/*
A pasta na qual pertence o script atual.
Se usada dentro de um include, será devolvida a pasta do arquivo que está sendo incluído.
Tem o mesmo output que dirmane(__FILE__);
Não tem barra no final do valor, a não ser que estejamos na raiz.
*/

echo '(index_2.php): ' . __DIR__ . '<br>';

include 'outros/script.php';

//__FUNCTION__

/*
O nome da função onde o código está sendo executado
*/

adicionar(10,20);

function adicionar($a, $b){
    echo $a + $b . '<br>';
    echo __FUNCTION__; //retorna o nome da função
}