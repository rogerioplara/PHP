<?php

/*
Por ser um módulo introdutório, não vamos explorar em profundidade alguns conceitos mais avançados de
gestão de erros. No entanto, os conceitos fundamentais:

Quando identificamos um espaço do nosso código que pode
originar um erro dinamicamente, podemos usar a estrutura
try... catch... finally...

A estrutura é a seguinte:

try {
    código que pretendemos executar de forma segura
} catch(Throwable $e) {
    código que será executado no caso de acontecer um erro
} finally {
    código que será sempre executado, existindo erro ou não
}

Colocamos o código que pretendemos executar sem erros
destrutivos dentro do bloco try

Se algum erro ocorrer, a mensagem será automaticamente
salva no Exception $e e é executado o código dentro do catch

Adicionalmente, podemos colocar um bloco finally para 
código que será sempre executado a após um try ou catch
*/

$valor1 = 10;
$valor2 = 0;

// $resultado = $valor1 / $valor2; //divisão por zero > erro

try {
    $resultado = $valor1 / $valor2;
    echo $resultado;
} catch (Throwable $e) { //pega o erro e joga na variavel erro
    echo 'Erro: ' . $e->getMessage();
} finally {
    echo '<br>Este código será sempre executado.</br>';
}

echo 'FIM!';