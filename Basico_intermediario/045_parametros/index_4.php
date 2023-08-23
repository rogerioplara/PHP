<?php

/*
O PHP vai sempre tentar determinar o data type dos parâmetros e do return.
Podemos reforçar o tipo de valores que serão retornados
*/

function adicionar($a, $b): int{
    return $a + $b;
}

echo adicionar(10,20) . '<br>';

//se for alterado para string

function multiplicar($a, $b): string{
    return $a * $b;
}

echo multiplicar(10,2); //apresenta o resultado normalmente

/*
Existe um mecanisno no PHp designado por strict types
se esse mecanismo não estiver ativo, o PHP sempre vai tentar fazer a conversão implícita dos valores
*/