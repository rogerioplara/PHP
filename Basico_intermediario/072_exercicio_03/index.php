<?php

//Dessa forma a divisão será feita de qualquer forma, porém se gerar o erro de divisão por zero, vai gerar o erro;
//Essa divisão só vai gerar erro se e somente se for inválida, caso seja 0 no numerador, não vai gerar erro. Ex: 0/7 = 0

function divisor($a, $b)
{
    try
    {
        return $a / $b;
    }
    catch (\Throwable $th)
    {
        return null;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Nível 1 - Exercício 03</title>
</head>

<body>

    <?php for ($i = 0; $i <= 20; $i++) : ?>

        <?php
        $valor1 = rand(0, 10);
        $valor2 = rand(0, 10);
        $resultado = divisor($valor1, $valor2);
        ?>

        <p><?= "$valor1 : $valor2 = " . ($resultado === null ? 'Divisão por zero' : $resultado) ?></p>

    <?php endfor; ?>

</body>

</html>