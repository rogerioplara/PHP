<?php

$valor = 50;

$resultado = match(true){
    $valor > 100 => fn1(),
    $valor == 100 => fn2(),
    $valor < 100 => fn3()
};

echo $resultado;

function fn1(){
    return "Valor maior que 100";
}

function fn2(){
    return "Valor igual a 100";
}

function fn3(){
    return "Valor menor que 100";
}
