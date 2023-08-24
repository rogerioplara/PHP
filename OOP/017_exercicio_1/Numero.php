<?php

namespace Calculadora;

class Numero
{
    private $numero;

    public function __construct($n)
    {
        $this->numero = $n;
    }

    public function get_numero()
    {
        return "Número selecionado: {$this->numero}";
    }

    public function par_ou_impar()
    {
        return $this->numero % 2 == 0 ? "Par" : "Ímpar";
    }

    public function tabuada()
    {
        for ($i = 1; $i <= 10; $i++)
        {
            $tabuada[] = "{$this->numero} x {$i} = " . ($i * $this->numero);
        }
        array_unshift($tabuada, '');
        unset($tabuada[0]);
        return $tabuada;
    }

    public function raiz_quadrada()
    {
        return "A raiz quadrada de {$this->numero} é: " . number_format(sqrt($this->numero), 4);
    }
}
