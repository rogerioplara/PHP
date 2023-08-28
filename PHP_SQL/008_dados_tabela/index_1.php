<?php

/*
APRESENTAR OS DADOS NUMA TABELA HTML

Vamos fazer um exercício muito simples.
Carregar os dados dos clientes. Só vamos carregar os primeiros 20.
Depois vamos apresentar numa tabela formatada com bootstrap e apresentar o total de clientes listados
*/

//configurações
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

//carregar os dados em formato de objetos
$resultados = $ligacao->query("SELECT * FROM clientes LIMIT 20")->fetchAll(PDO::FETCH_OBJ);

$ligacao = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - Apresentação de dados em uma query SQL</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Clientes</h3>
                <hr>

                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Sexo</th>
                            <th>Data Nascimento</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Endereço</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($resultados as $cliente) : ?>
                            <tr>
                                <td> <?= $cliente->nome ?> </td>
                                <td> <?= $cliente->sexo == 'm' ? 'Masculino' : 'Feminino' ?> </td>
                                <td> <?= substr($cliente->data_nascimento, 0, 10) ?> </td>
                                <td> <?= $cliente->email ?> </td>
                                <td> <?= $cliente->telefone ?> </td>
                                <td> <?= $cliente->morada . ' - ' . $cliente->cidade ?> </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

                <p class="text-end mt-3">Total <strong><?= count($resultados) ?></strong></p>

            </div>
        </div>
    </div>

</body>

</html>