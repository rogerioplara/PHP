<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cor-texto {
            color: red;
        }
    </style>
</head>
<body>
    <h1>O meu nome é Rogerio!</h1>

    <?php 
        $nome = "Rogerio Peres";
    ?>

    <h3>O meu nome é <?php echo $nome ?>!</h3>
    <h3>O meu nome é <?= $nome ?>!</h3>

    <!-- Escrever HTML a partir do PHP -->
    <?php
        echo "<p>Vamos criar um parágrafo de HTML!</p>";
        echo '<p class="cor-texto">Este parágrafo tem uma classe de CSS.</p>';
    ?>
</body>
</html>