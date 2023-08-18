<?php

//BREAK com vários níveis

/*
Imagina o cenário em que estamos executando dois ciclos, um dentro do outro.
O ciclo interior encontra uma condição para ser interrompido.
Queremos que ambos sejam interrompidos
*/

$paises = [
    'Portugal' => ['Lisboa', 'Porto', 'Coimbra'],
    'Brasil' => ['Brasília', 'São Paulo', 'Rio de Janeiro'],
    'Angola' => ['Luanda', 'Cabinda', 'Huambo'],
    'Moçambique' => ['Maputo', 'Matola', 'Nampula']
];

foreach($paises as $pais => $cidades){

    echo "<h3><u>$pais</u></h3>";

    foreach($cidades as $cidade){

        //vamos para os dois ciclos quando a cidade de Cabinda for encontrada

        if($cidade == 'Cabinda') break 2;

        echo "<p>$cidade</p>";
    }
}

echo '<hr>FIM';