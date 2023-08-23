<?php

//como vamos usar a classe que criamos no script anterior.

// 1. Importar o script
require_once('index_1.php');

// 2. Para podermos instanciar a classe do script index_1.php temos que ter em atenção o seu namespace

// $matematica = new Matematica(); // não vai funcionar

//forma correta
$matematica = new classes_principais\Matematica();
echo $matematica->adicionar(10, 20);
