<?php

use sys4soft\Database;

//importar a classe Database e configurações
require_once('Database.php');

$config = [
    'host' => 'localhost',
    'database' => 'meus_clientes',
    'username' => 'user_meus_clientes',
    'password' => '3a2OfofEhAl46IpICulAWar7LEB6TI',
];

//instanciação de objeto Database
$database = new Database($config);

//resultados
$resultados = $database->execute_query("SELECT * FROM clientes");

// //ver os dados
// echo '<pre>';
// print_r($resultados);
// die();

$total_clientes = $resultados->affected_rows;
$resultado = $resultados->results;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PDO - Apresentar Dados</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 20px;
        }

        .caixa-cliente {
            border: 1px solid gray;
            margin: 5px;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <h3>DADOS DOS MEUS CLIENTES</h3>

    <!-- apresentação dos dados -->
    <?php if ($total_clientes == 0) : ?>
        <p>Não foram encontrados registros</p>
    <?php else : ?>
        <?php foreach ($resultado as $cliente) : ?>
            <p>Nome: <strong><?= $cliente->nome ?></strong></p>
            <p>Email: <strong><?= $cliente->email ?></strong></p>
            <hr>
        <?php endforeach; ?>
    <?php endif; ?>

    <p>Total: <strong><?= $total_clientes ?></strong> Cliente(s)</p>

</body>

</html>