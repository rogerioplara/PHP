<?php
/**
 * 1. construir um array com todos os resultados da tabuada do 327
 * 2. apresentar os dados do array com um ciclo foreach (apenas os valores)
 */

$tabuada = [];
for ($i=1; $i <= 10; $i++){
   array_push($tabuada, 327 * $i);
}

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
 </head>
 <body>

   <?php foreach($tabuada as $valor):?>
      <p><?= $valor ?></p>
   <?php endforeach; ?>

 </body>
 </html>