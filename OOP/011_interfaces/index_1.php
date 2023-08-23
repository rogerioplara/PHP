<?php

// CRIAÇÃO DE CLASSES A PARTIR DE INTERFACES

/*
Em POO, o conceito de interfaces é semelhante ao de uma classe abstrata.

Interfaces permitem especificar métodos que as classes vão ter que
implementar em suas estruturas.

Quando várias classes tem que implementa rum conjunto de métodos semelhantes, entramos em um conceito muito importante da POO:
POLIMORFISMO
*/

use Cao as GlobalCao;

interface Animal
{
    public function vocalizar($vezes);
    public function identificar();
    public function executarMovimento($direcao);
}

/*
principais diferenças entre interfaces e classes abstratas:

    - As interfaces não podem conter propriedades.
        (classes abstratas podem)
    - Todos os métodos das interfaces são public
        (nas classes abstratas, são public ou protected)
    - Todos os métodos das interfaces são abstratos por natureza
        Não podem ter implementação dentro da interface
        O uso do termo abstract não é necessário - implícito
    - As classes podem implementar uma interface e herdar de outra classe ao mesmo tempo.
*/

class Cao implements Animal
{
    public function vocalizar($vezes)
    {
        //...
    }

    public function identificar()
    {
        //...
    }

    public function executarMovimento($direcao)
    {
        //...
    }
}

$cao = new Cao();
$cao->vocalizar(3);
$cao->identificar();
$cao->executarMovimento('Pular')
