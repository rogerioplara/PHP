<?php

/*
Imagine o cenário onde tem um conjunto de dados considerável e quer definir em um outro script.
Também é possível seguir o seguinte exemplo:
*/

$nomes = require_once('dados.php');

echo '<pre>';
print_r($nomes);