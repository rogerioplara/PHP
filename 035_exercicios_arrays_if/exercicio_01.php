<?php

/**
 * Usando como ponto de partida o array de produtos, apresente no html uma unordered list(ul) contando todos os produtos do array
 */

$produtos = ['Arroz', 'Batata', 'Laranja'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>

    <ul>
    <?php foreach ($produtos as $produto): ?>
        <li><?= $produto ?></li>
    <?php endforeach;?>
    </ul>
    
</body>
</html>