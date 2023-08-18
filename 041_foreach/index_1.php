<?php

//FOREACH

/*
É a melhor opção para iterações em arrays ou objetos

foreach([array] as $value OU $key => $value){
    # código
}
*/

$nomes = ['joao', 'ana', 'carlos', 'francisco', 'maria'];
foreach ($nomes as $nome) {
    echo "$nome<br>";
}

echo '<hr>';

$posicoes = [
    'administrador' => 'joao',
    'secretario' => 'ana',
    'colaborador' => 'carlos',
];

foreach ($posicoes as $chave => $valor) {
    echo "Como $chave, temos a seguinte pessoa: $valor<br>";
}

//no final da execução, a variável $nome e a $cargo vão permanecer disponíveis
echo "<hr>$valor<br>$chave";