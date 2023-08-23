<?php

//HEREDITARIEDADE

class AnimalDeEstimacao
{
    protected $nome;
    protected $especie;
    protected $raca;

    function __construct($nome, $especie, $raca)
    {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->raca = $raca;
    }
}

class Cao extends AnimalDeEstimacao
{
    function latir($vezes)
    {
        echo "O {$this->nome} latiu $vezes vezes!<br>";
    }
}

class Gato extends AnimalDeEstimacao
{
    function miar($vezes)
    {
        echo "O {$this->nome} miou $vezes vezes!<br>";
    }
}

//Instanciação das classes em objetos

$cao = new Cao('Snoopy', 'Canis Lupus', 'Beagle');
$gato = new Gato('Garfield', 'Felis Catus', 'Persa');

//Não só cada objeto tem as propriedades da classe base,
//como também tem as funcionalidades que cada classe implementa.

//Portanto:
$cao->latir(10);
echo '<br>';
$gato->miar(10);

/*
Observe que, na classe AnimalDeEstimação, as pripriedades foram definidas com o acess modifier PROTECTED.
No caso do PROTECTED, a propriedade ou método pode ser acessada da classe e dentro de classes derivadas dela.
*/