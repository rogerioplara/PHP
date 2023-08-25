<?php

/*
A partir do PHP 7.1 passou a ser possível usar public, private
e protected como access modifier das constantes
*/

class Matematica
{
    private const VALOR_FIXO = 10;

    public function executar($n)
    {
        return self::VALOR_FIXO * $n;
    }
}

$m = new Matematica();
echo $m->executar(200);
echo '<br>';
echo $m::VALOR_FIXO; //gera erro pois a const é private