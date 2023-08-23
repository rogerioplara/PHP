<?php

    // NULL
    
    // é um tipo especial de dados
    // representa uma variável sem valor ou com valor null

    $valor = null; // CASE INSENSITIVE
    echo "valor : $valor";
    var_dump($valor);
    echo '<br>';
    var_dump('teste');

    var_dump($numero); // undefined
    echo '<br>';

    $valor2 = 100;
    echo $valor2;
    unset($valor2); // limpa a variável $valor2
    echo '<br>';
    var_dump($valor2); // undefined