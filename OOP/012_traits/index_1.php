<?php

// O QUE SÕA TRAITS E COMO UTILIZAR

/*
O PHP apenas suporta heranças únicas: uma classe só pode herdar de uma 
outra classe.

Imagine que queira que a classe seja derivada de otura e, ao mesmo tempo,
posse 'herdar' outras funcionalidades a partir de outras estruturas.

É neste contexto que os traits surgem.

Basicamente, traits permitem declarar métodos que podem ser usados
em múltiplas classes.
Na sua vertente mais avançada, os traits podem conter métodos abstratos
que podem ser usados em múltiplas classes, e esses métodos podem ter
qualquer tipo de access modifier.
*/

trait funcoes_matematicas
{
    public function adicionar($a, $b)
    {
        return $a + $b;
    }

    public function subtrair($a, $b)
    {
        return $a - $b;
    }

    public function dividir($a, $b)
    {
        return $a / $b;
    }

    public function multiplicar($a, $b)
    {
        return $a * $b;
    }
}

class Matematica
{
    use funcoes_matematicas;
}

$calculadora = new Matematica();
echo $calculadora->adicionar(20, 10);
echo '<br>';
echo $calculadora->subtrair(20, 10);
echo '<br>';
echo $calculadora->multiplicar(20, 10);
echo '<br>';
echo $calculadora->dividir(20, 10);
echo '<br>';

/*
É possível incorporar dentro da classe Matematica um conjunto de métodos
que pertence a um trait.
*/