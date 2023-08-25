<?php

// CONSTANTES DENTRO DE UMA CLASSE

/*
Poderá ter a necessidade de definir uma constante que é
para ser utilizada apenas dentro da classe.
Isso é possível, porém as constantes são por naturea PUBLICAS
*/

class Matematica
{
    const VALOR_FIXO = 10;

    public function calcular($numero)
    {
        return $numero * self::VALOR_FIXO;
    }
}

$n = new Matematica();
echo $n->calcular(100);
echo '<br>';
echo $n::VALOR_FIXO;