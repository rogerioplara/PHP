<?php

/*
Agora, com a query bem organizada, voltamos a ter o resultado esperado.
Vamos adicionar na query uma cláusula WHERE.
Ela vai indicar que só queremos os produtso cujo ID seja superior a 100. Não existe nenhum produto nessa situação.
Então, vamos ter o retorno de $resultados = []
Não existem produtos na coleção
*/


//configurações
$database = 'udemy_loja_online';
$username = 'user_loja_online';
$password = '38boLO3osIYogEf7vo8764T26EWoW8';

//é possível adicionar um controle de erros para impedir que a aplicação termine com um erro
try {

    //ligação
    $ligacao = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $username, $password);

    //carregar os dados e executar a query
    $resultados = $ligacao->query("SELECT * FROM produtos where id < 100")->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $err) {
    $erro = "Aconteceu um erro na ligação";
}

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

                <?php if (!empty($erro)) : ?>
                    <p class="card p-3 mb-2 bg-danger text-center text-light"><?= $erro ?></p>
                <?php else : ?>

                    <?php if (count($resultados) == 0) : ?>
                        <p class="card p-3 mb-2 bg-info text-center text-light">Não foram encontrados dados.</p>
                    <?php else : ?>

                        <?php foreach ($resultados as $produto) : ?>
                            <div class="card p-3 mb-2 bg-light text-center">
                                <h5><?= $produto->produto ?></h5>
                                <h3 class="text-primary">R$ <?= number_format($produto->preco_unidade, 2) ?></h3>
                            </div>
                        <?php endforeach; ?>

                    <?php endif; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>

</body>

</html>