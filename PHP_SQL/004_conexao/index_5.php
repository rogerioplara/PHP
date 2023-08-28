<?php

/*
Neste caso não teremos erro na conexão
*/

//definir as propriedades da ligação
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//instanciando a nova ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
$ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//temos um erro na query. Esta instrução não está completa
$resultados = $ligacao->query("SELECT");

$ligacao = null;

/*
PDO::ERRMODE_SILENT - não apresenta erros
PDO::ERRMODE_WARNING - apresenta avisos
PDO::ERRMODE_EXCEPTION - dispara exceções que podem ser captadas no catch
*/