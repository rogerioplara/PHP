<?php

// IMPEDIR HERANÇA DE CLASSE OU MÉTODO

class Pessoa
{
    public function identificar()
    {
        //...
    }

    final public function falar()
    {
        //...
    }
}

class Cliente extends Pessoa
{
    public function identificar()
    {
        //nova implementação possível
    }

    public function falar()
    {
        //fatal error: cannot override final method
        //não é alterável porém é utilizavel
    }
}
