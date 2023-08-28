<?php

/*
Podemos usar o fetch para fazer o seguinte:
*/

//configurações
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

$resultados = $ligacao->query("SELECT * FROM produtos");

while ($linha = $resultados->fetch()) {
    echo 'Produto: <strong>' . $linha['produto'] . '</strong>';
    echo '<br>';
}

$ligacao = null;

/*
A query devolve um conjunto de resultados.
O ciclo while percorreu cada uma das linhas do resultado usando o método fetch()
Em cada volta do ciclo, o método vai buscar o registro seginte. 
*/