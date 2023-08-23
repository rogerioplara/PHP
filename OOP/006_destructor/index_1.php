<?php

//DESTRUCTOR

/*
Assim como ocorre com o __construct, existe um método especial que só vai ser executado
quando um objeto é destruído ou o script termina a execução
*/

class Cliente
{
    private $nome;

    function __construct($n)
    {
        $this->nome = $n;
        echo "Foi criado um objeto com o nome: {$this->nome}<br>";
    }

    function __destruct()
    {
        echo "O objeto foi destruído. Tinha o seguinte nome: {$this->nome}<br>";
    }
}

$c = new Cliente('Rogerio');
echo '<br>';

//executando esse bloco de código
for ($i=0; $i < 10; $i++) { 
    echo "valor de i: $i<br>";
}
// se esse for o fim do script, o objeto seria destruído aqui e a mensagem apareceria no browser
echo '<br>';

//destruir o objeto deliberadamente
unset($c);

echo '<br>Fim do script';