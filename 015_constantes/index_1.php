<?php
// Constantes
// ao contrario das variáveis, as constantes não podem ser alteradas

// definir uma constante
define('NOME', 'valor');

// por convenção, as constantes são definidas com letras maiúsuculas
define('TAXA_FIXA', 10);
define('APRESENTAR_DADOS', false);

// apresentar o valor de uma constante
echo TAXA_FIXA; //10

// usar o valor de uma constante
$preco_inicial = 500;
$preco_final = $preco_inicial + TAXA_FIXA;
echo $preco_final;  // 510

// não podemos alterar o valor de uma constante
// TAXA_FIXA = 100;