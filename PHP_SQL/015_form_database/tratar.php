<?php

use sys4soft\Database;

//importar a class Database e configurações
require_once('Database.php');

//instanciação do objeto Database
$config = [
    'host'  => 'localhost',
    'database' => 'meus_clientes',
    'username' => 'user_meus_clientes',
    'password' => '3a2OfofEhAl46IpICulAWar7LEB6TI',
];

$database = new Database($config);

//parametros
$params = [
    ':nome' => $_POST['text_nome'],
    ':email' => $_POST['text_email'],
];

//inserir os dados do cliente
$result = $database->execute_non_query("INSERT INTO clientes(nome, email, created_at) VALUES(:nome, :email, NOW())", $params);

echo '<pre>';
print_r($result);

//voltar ao formulário automaticamente
header('Location: formulario.php');
