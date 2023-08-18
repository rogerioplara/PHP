<?php
/**
 * dada a coleção de nomes, apresente toda a coleção exceto o nome cujo indice = 4
 */

$nomes = ['joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo'];

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>

   <?php foreach ($nomes as $key => $nome): ?>
      <?php if($key == 4): continue; endif; ?>
      <p><?= "$key => $nome" ?></p>
   <?php endforeach; ?>

 </body>
 </html>