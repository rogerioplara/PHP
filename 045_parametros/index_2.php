<?php

/*
Podemos definir parâmetros opcionais dentro de uma função
São parâmetros que já tem um valor padrão atribuido

Se passarmos um argumento para esse parâmetro, o valor passado será usado

*/

function multiplicar($a, $b = 5){
    return $a * $b;
}

echo multiplicar(10); //50
echo '<br>';
echo multiplicar(10, 3); //30

//os parâmetros adicionais devem sempre ser definidos depois dos parâmetros não opcionais