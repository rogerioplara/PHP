<?php

// OBTER RESULTADOS COM A EXECUÇÃO DE QUERIES

/*
Vamos obter dados a partir da base de dados e ver como o PHP
pode receber
*/

//configurações
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

$estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
echo $estado;
echo '<hr>';

//Comunicação simples
$resultados = $ligacao->query("SELECT * FROM produtos");
echo '<pre>';
print_r($resultados);
//O retorno é um objeto PDOStatement. Aparentemente sem resultados

echo '<hr>';

//Podemos ter acesso aos resultados de várias formas:
$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll();
print_r($resultados);

//fechar a ligação
$ligacao = null;
