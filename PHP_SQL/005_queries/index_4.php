<?php

/*
Se usarmos fetchAll();
*/

//configurações
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll();

foreach ($resultados as $linha) {
    echo 'Produto: <strong>' . $linha['produto'] . '</strong>';
    echo '<br>';
}

$ligacao = null;

/*
O que ocorreu aqui?
A query devolveu um conjunto de resultados
O ciclo foreach percorreu cada uma das linhas do resultado, apresentando apenas o nome
*/