<?php

//CONTINUE - permite passar para a iteração seguinte

$nomes = ['joao', 'ana', 'carlos', 'francisco', 'maria'];
$ignorar = 'carlos';

foreach ($nomes as $nome) {
    if ($nome == $ignorar) continue;
    echo "$nome<br>";
}

//ignora e continua a execução na próxima iteração