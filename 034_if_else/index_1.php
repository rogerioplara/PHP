<?php

//INSTRUÇÃO CONDICIONAL IF...ELSEIF...ELSE

/**
 * if(condição){
 *      executa o código dentro do bloco
 * }
 */

$valor = 10;
if ($valor == 10) {
    echo "OK!";
}

echo '<br>';
//se a condição falhar, o código não vai ser executado
//podemos usar o else para criar uma alternativa

if($valor > 10){
    echo "Valor é maior que 10";
} else {
    echo "Valor é igual ou inferior a 10";
}

//podemos adicionair mais condições alternativas

if($valor > 100){
    // ...
} elseif($valor > 50){
    //...
} elseif($valor > 10){
    //...
} else {
    //...
}

//também é possível aninhar as declarações conforme a necessidade
if ($valor > 5) {
    if ($valor == 10) {
        //...
    } else {
        //...
    }
} else {
    //...
}