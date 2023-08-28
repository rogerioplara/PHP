<?php

/*
Os métodos fetch() e fetchAll() diferem no seguinte aspecto:
    fetch() vai buscar o próximo elemento da coleção de dados
    fetchAll() busca todos de uma vez
*/

//configurações
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

//utilização do fetch
$resultados = $ligacao->query("SELECT * FROM produtos")->fetch();
echo '<pre>';
print_r($resultados);

//com o fetch(); trouxe somente o primeiro registro

//fechar a ligação
$ligacao = null;
