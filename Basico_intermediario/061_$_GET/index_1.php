<?php

//A SUPER GLOBAL $_GET

/*
Com muita frequência é possível visualizar na barra de endereços do browser algo como?

https://www.lojaonline.com/index.php?id=1&prd=25

O endereço web acima tem uma url:
https://www.lojaonline.com/index.php

Seguida de um sinal de interrogação que da início à query string,
que é o conjunto de parâmetros que vamos poder captar dentro do nosso script

Cada parâmetro está definido por um nome e um valor
No caso acima, temos um id=1

Logo depois aparece um & que permite separar parâmetros de uma query.
Como conseguimos chegar nesses parâmetros

Veremos a super global $_GET. É um array onde são automaticamente colocados os parâmetros de uma query string.
*/

//vamos usar o endereço:
//http://localhost/php/061_$_GET/index_1.php

//podemos verificar se existe algum parâmetro na query string
if(!empty($_GET)){
    echo "Existem parâmetros na query string";
} else {
    echo "Não existem parâmetros na query string";
}