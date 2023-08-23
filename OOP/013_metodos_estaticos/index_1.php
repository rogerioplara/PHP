<?php

// MÉTODOS ESTÁTICOS

/*
Métodos estáticos são métodos de uma classe que podem ser invocados
diretamente sem que seja necessário criar um objeto a partir desa classe
*/

class Matematica
{
    public static function adicionar($a, $b)
    {
        return $a + $b;
    }
}

//podemos chamar o método escrevendo o nome da classe::método

echo Matematica::adicionar(20, 30);
