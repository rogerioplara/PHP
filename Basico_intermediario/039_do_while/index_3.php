<?php

$valor1 = 1;
$valor2 = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>

    <!-- while -->
    <?php while($valor1 <= 10): ?>
        <h3>Valor 1 = <?= $valor1++ ?></h3>
    <?php endwhile; ?>

    <!-- do while -->
    <?php do{ ?>
        <h3>Valor 2 = <?= $valor2++ ?></h3>
    <?php }while($valor2 <= 10)?>

</body>
</html>