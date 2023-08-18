<?php 
/**
 * Dada a coleção de nomes, devem ser todos apresentados
 * A partir de Maria (inclusive) devem ser com texto vermelho
 */

 $nomes = ['joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .vermelho {
            color: red;
        }
    </style>
</head>
<body>
    
    <?php foreach ($nomes as $key => $nome): ?>
        <?php if($key >= 4): ?>
            <p class="vermelho"><?= "$key => $nome" ?></p>
            <?php continue ?>
        <?php endif; ?>
        <p><?= "$key => $nome" ?></p>
    <?php endforeach; ?>

</body>
</html>