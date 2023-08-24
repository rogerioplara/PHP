<?php

namespace Humanos;

class Humano
{
    private $masculinos = [];
    private $femininos = [];
    private $desconhecidos = [];

    public function definir($s, $n)
    {
        if (strtoupper($s) == 'M')
        {
            $this->masculinos[] = $n;
        }
        elseif (strtoupper($s) == 'F')
        {
            $this->femininos[] = $n;
        }
        else
        {
            $this->desconhecidos[] = $n;
        }
    }

    public function get_masculinos()
    {
        return $this->masculinos;
    }

    public function get_femininos()
    {
        return $this->femininos;
    }

    public function get_desconhecidos()
    {
        return $this->desconhecidos;
    }
}
