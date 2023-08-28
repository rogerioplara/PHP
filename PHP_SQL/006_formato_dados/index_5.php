<?php

/*
Uma observação final sobre este assunto
Existem outras formas de indicar do PDO como devolver os resultados
*/

//configurações
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

$resultados = $ligacao->query("SELECT * FROM produtos");
$resultados->setFetchMode(PDO::FETCH_ASSOC);

$ligacao = null;

while ($linha = $resultados->fetch()) {
    echo $linha['produto'] . ' - Preço: ' . $linha['preco_unidade'] . '<br>';
}
