<?php

    // DATA TYPES - TIPOS DE DADOS

    // as variáveis (assim como as constantes), guardam valores de um determinado tipo
    // no PHP as variáveis não são tipadas
    // Isso vai ser mais complexo de processar e pode gerar erros

    // TIPOS DE DADOS ESCALARES

    // bool / booleano - aceita valores true | false - quando true retorna 1, false não retorna nada
    $apresentar_dados = true;
    // $apresentar_dados = false;
    
    // int / inteiro - são valores numéricos sem casas decimais
    $valor = 0; 
    $valor1 = 12345612;
    $valor2 = -345123;

    // float - valores flutuantes (com casas decimais)
    $float1 = 1.5;
    $float2 = 2356.345;
    $float3 = 0.0034;
    $float4 = -0.4;

    // string - valores alfanuméricos (letras, palavras, frases, textos, ...)   
    $nome = "rogerio";
    $sobrenome = "lara";
    $letra_escolhida = "A";
    $frase_do_dia = "frase qualquer do dia";

    // -------------------------------
    echo $apresentar_dados . '<br>'; // caso específico dos booleanos
    echo '-------------' . '<br>';
    echo $valor . '<br>';
    echo $valor1 . '<br>';
    echo $valor2 . '<br>';
    echo '-------------' . '<br>';
    echo $float1 . '<br>';
    echo $float2 . '<br>';
    echo $float3 . '<br>';
    echo $float4 . '<br>';
    echo '-------------' . '<br>';
    echo $nome . '<br>';
    echo $sobrenome . '<br>';
    echo $letra_escolhida . '<br>';
    echo $frase_do_dia . '<br>';
    echo '-------------' . '<br>';

    //apresentar os tipos de cada variável
    echo gettype($apresentar_dados) . '<br>';
    echo gettype($valor) . '<br>';
    echo gettype($float1) . '<br>';
    echo gettype($nome) . '<br>';
    echo '-------------' . '<br>';

    //apresentar informações da variável
    var_dump($apresentar_dados);
    echo '<br>';
    var_dump($valor1);
    echo '<br>';
    var_dump($float1);
    echo '<br>';
    var_dump($nome);
    echo '<br>';