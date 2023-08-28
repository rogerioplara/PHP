<?php

// Vamos colocar um erro nas configurações


//definir as propriedades da ligação
$database = 'udemy_loja_onlinexxxxx'; //não existe
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//instanciando a nova ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

//verificar se a ligação foi estabelecida corretamente
$estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
echo $estado;

//fechar a ligação
$ligacao = null;
