<?php

// BREAK E CONTINUE

/* 
Os loops são usados para executar o mesmo código múltiplas vezes.
Em determinadas situções, podemos querer que o ciclo não execute todas as suas iterações, ou queremos que seja simplesmente interrompido.

É nestes cenários que entram o Break e Continue
*/

//BREAK - interrompe a execução de um ciclo antes do previsto

$paragem = 5;
for ($i=0; $i < 10; $i++) { 
    echo "$i<br>";
    if($i == $paragem){
        break;
    }

    //ou
    //if ($i == $paragem) break;
}

echo '<hr>';

$nomes = ['joao', 'ana', 'carlos', 'francisco', 'maria'];
$nome_interrompe = "francisco";

foreach($nomes as $nome){
    echo "$nome<br>";
    if($nome == $nome_interrompe) break;
}

//break e continue funcionam também no while e do while