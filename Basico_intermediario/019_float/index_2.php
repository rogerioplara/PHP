<?php

    // FLOATS

    // valor mínimo e máximo depende da plataforma (32 ou 64 bits)

    echo PHP_FLOAT_MIN;
    echo '<br>';
    echo PHP_FLOAT_MAX;
    echo '<br>';

    // INFINITY - INF - valor muito grande para ser armazenado e apresentado
    $valor = PHP_FLOAT_MAX * 2;
    echo $valor;
    echo '<br>';
    var_dump($valor);

    // converter para float
    echo '<br>';
    $valor = 10;
    $valor_float = (float)$valor;
    echo $valor_float;
    echo '<br>';
    var_dump($valor_float);

    // ou ainda
    echo '<br>';
    $valor = 20;
    $valor_float = floatval($valor);
    echo $valor_float;
    echo '<br>';
    var_dump($valor_float);