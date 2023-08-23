<?php

// IMPEDIR HERANÇA DE CLASSE OU MÉTODO

/*
Imagine que vá criar um bloco de código que vai ser usado por outro
programador. Vai querer que a estrutura da sua classe contenha
mecanismos que impeçam determinado tipo de ação.
Por exemplo, pode querer que uma determinada classe não possa
ser herdada por outra. Ou, simplesmente um determinado método dessa
classe não deverá poder ser sobreposto (override) por outro dentro
da classe 'filha'
*/

final class ClasseUnica
{
    //Esta classe não vai poder ser herdada (usando o extends)

    //...
}

//se tentarmos criar uma nova classe que extende a anterior
class Nova extends ClasseUnica
{
    //Fatal Error: Class Nova may not inherit from final class
}

//isso ocorre devido ao uso da palavra reservada FINAL