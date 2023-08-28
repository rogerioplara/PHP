<?php

// OBTER DADOS EM DIFERENTES FORMATOS

/*
Estamos recebendo os resultados em forma de array associativo
*/

//configurações
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll();


$ligacao = null;


/*
Quando chegamos a esse ponto do script, a ligação já foi feita, já foi executada a query que foi buscar todos os
dados da tabela produtos.
*/

echo '<pre>';
print_r($resultados);
//existe um conjunto de informações duplicado