<?php

    // STRINGS

    /**
     * Uma string é um conjunto de caracteres
     */

    $nome = "Rogerio";
    $sobrenome = 'Lara';

    // as duas variáveis são do tipo string
    // Diferença: nas aspas duplas, podemos adicionar variáveis no interior

    $apresentação = "O meu nome é $nome e o sobrenome é $sobrenome.";

    // podemos melhorar a leitura com a seguinte equivalencia
    $apresentação = "O meu nome é {$nome} e o sobrenome é {$sobrenome}.";

    // CONCATENAÇÃO DE STRINGS
    $nome_completo = $nome . ' ' . $sobrenome;

    // COMO OBTER A PRIMEIRA LETRA DO NOME
    echo $nome[0];

    // para obter a 3ª letra
    echo $nome[2];

    // R o g e r i o
    // 0 1 2 3 4 5 6

    echo '<br>';
    // para acessar as letras da direita para a esquerda
    echo $nome[-1];

    echo '<br>';
    // podemos usar este métodos para motdificar letroas
    $sobrenome[2] = 'B';
    echo $sobrenome;
