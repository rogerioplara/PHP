<?php

//$_GET

//http://localhost/PHP/061_$_GET/index_3.php?id=100&produto=bicicleta

$id = isset($_GET['id']) ? $_GET['id'] : null;
$produto = isset($_GET['produto']) ? $_GET['produto'] : null;

echo "ID = $id<br>";
echo "PRODUTO = $produto<br>";

/*
Vejamos a informação disponível nas ferramentas do programador F12

Network -> Name
Headers -> método GET e Payload

Esta é uma das formas que pode usar para passar informações entre páginas.
Cuidado, nunca deve passar informações sensiveis pelo método GET

Existem determinados caracteres que entram em conflito com um query streing. Por exemplo o &, o espaço, o < e >
*/