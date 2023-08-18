<?php
/**
 * Construa uma apresentação html que mostre a tabuada do 5
 */
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
 </head>
 <body>

    <?php for ($i=1; $i <= 10; $i++): ?>
        <p><?= "5 x $i = " . 5 * $i ?></p>
    <?php endfor; ?>

 </body>
 </html>