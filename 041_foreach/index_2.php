<?php

$nomes = ['joao', 'ana', 'carlos', 'francisco', 'maria'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEach</title>
</head>
<body>
    
    <div>

        <?php foreach($nomes as $nome):?>
            <h2><?= $nome ?></h2>
        <?php endforeach; ?>

    </div>

</body>
</html>