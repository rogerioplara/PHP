<?php

//CLASSES ABSTRATAS

/*
Ao herdar de uma classe abstrata, o método da classe filha deve ser
definido com o mesmo nome, e um acess modifier com restrição igual ou menor.

Por exemplo, se um método abstrato for definido como protected, o
método da classe filha deve ser definido como protected ou public.
Não pode ser privado.

Além disso, o tipo e o número de argumentos exigidos devem ser os mesmos.
No entanto, as classes filhas pode ter argumentos opcionais.

Assim, quando uma classe filha é herdada de uma classe abstrata, temos
as seguintes regras:

> O método da classe filha deve ser definido com o mesmo nome;
> O método da classe filha deve ser definido com o mesmo access modifier
ou outro menos restritivo
> O número de argumentos necessários deve ser o mesmo.
    No entando, a classe filha pode ter argumentos opcionais adicionais
*/

abstract class Pessoa
{
    abstract public function falar($mensagem);
}

//aparece erro pois está puxando a classe de outro arquivo
class Cliente extends Pessoa
{
    public function falar($mensagem, $autor = 'joao')
    {
        echo "$mensagem - $autor";
    }
}

$cliente = new Cliente();
$cliente->falar('Mensagem de teste', 'Rogerio');

//IMPORTANTE: O método na classe filha deve ser igual ao método na classe
//pai, porém ao adicionar um parâmetro opcional, podemos passar informação adicional para o interior da função