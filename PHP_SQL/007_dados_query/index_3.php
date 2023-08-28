<?php

/*
No script anterior os dados foram apresentados.
Vamos imaginar que alteramos o nome da tabela 'produtos' para uma tabela que não existe.
Teremos um erro.

Como controlar isso?
*/


//configurações
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

//carregar os dados -> existe um erro na tabela, não foi encontrada
$resultados = $ligacao->query("SELECT * FROM frutas")->fetchAll(PDO::FETCH_OBJ);

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

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5">

                <?php if (count($resultados) == 0) : ?>

                    <p class="text-center">Não foram encontrados dados.</p>

                <?php else : ?>

                    <?php foreach ($resultados as $produto) : ?>
                        <div class="card p-3 mb-2 bg-light text-center">
                            <h5><?= $produto->produto ?></h5>
                            <h3 class="text-primary">R$ <?= number_format($produto->preco_unidade, 2) ?></h3>
                        </div>
                    <?php endforeach; ?>

                <?php endif; ?>

            </div>
        </div>
    </div>

</body>

</html>