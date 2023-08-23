<?php

//PROPRIEDADES ESTÁTICAS

/*
A semelhança dos métodos, as classes também podem ter propriedades
estáticas. Essas propriedades podem ser chamadas diretamente sem que seja necessário criar uma instância da classe
*/

class Matematica
{
    public static $pi = 3.14;
}

//para chamar a propriedade, usamos os ::

echo "Resultado = " . Matematica::$pi * 10;
