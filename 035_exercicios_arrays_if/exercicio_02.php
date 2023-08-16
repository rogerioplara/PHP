<?php

//usando como ponto de partida o array de produtos, inverta a ordem dos mesmos, acrescenta no final 'maçã' e pêra e apresente em uma ul

$produtos = ['arroz', 'batata', 'laranja'];
array_push($produtos, 'maçã', 'pêra'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>

    <ul>
        <?php foreach(array_reverse($produtos) as $produto):?>
            <li>
                <?= $produto ?>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>