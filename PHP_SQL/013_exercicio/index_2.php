<?php

//carrega primeiro o objeto da base de dados
use sys4soft\Database;

//opções de conexão com a base de dados
define('MYSQL_CONFIG', [
    'host' => 'localhost',
    'database' => 'bd_stock',
    'username' => 'root',
    'password' => '',
]);

require_once('Database.php');

//criação do objeto a partir da classe e passa as configurações que temos -> executa o construtor
$db = new Database(MYSQL_CONFIG);

// // SELECT
$results = $db->execute_query("SELECT * FROM stock LIMIT 100");

// // INSERT
// $params = [
//     ':produto' => 'produto 5',
//     ':quantidade' => 30,
// ];
// $results = $db->execute_non_query("INSERT INTO stock(produto, quantidade) VALUES(:produto, :quantidade)", $params);

// // // UPDATE
// $params = [
//     ':id' => 3,
//     ':produto' => 'produto atualizado 3',
// ];
// $results = $db->execute_non_query("UPDATE stock SET produto = :produto WHERE id = :id", $params);

// DELETE
// $params = [
//     ':id' => 4,
// ];
// $results = $db->execute_non_query("DELETE FROM stock WHERE id < 5");

echo '<pre>';
print_r($results);
echo '</pre>';
