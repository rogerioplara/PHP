<?php

//TRATAMENTO DE ERROS

/*
Vimos anteriormente como ativar e controlar a forma como o PHP
apresenta (ou não) os erros dos nossos scripts. No entanto,
o desafio está em executar o nosso código de forma que, sempre
que um potencial erro ocorra, nossa aplicação seja capaz de capturar
e seguir um caminho alternativo

Aqui entra o tratamento de exceções.
É um mecanismo que serve para alterar o fluxo normal da 
execução do código, se ocorrer um erro especificado (excepcional).
Essa condição é chamada de exceção
*/

function adicionar($a, $b){
    if(!is_numeric($a) || !is_numeric($b)){
        throw new Exception("Pelo menos um dos valores não é numérico");
    }
    return $a + $b;
}

// echo adicionar(10, 20);
// echo '<hr>';

// echo adicionar("10", "20");
// echo '<hr>';

// echo adicionar("Dez", 20);
// echo '<hr>';

//agora usando a estrutura try catch para impedir o fim da execução

try {
    echo adicionar("joao", 10);
} catch (Exception $erro) {
    echo $erro->getMessage();
    echo '<hr>';
}

echo 'Fim do script.';