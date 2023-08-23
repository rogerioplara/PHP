<?php

// COMO USAR NAMESPACES E SUA UTILIDADE

/*
O conceito de Namespaces é muito importante na POO.

Permite resolver dois problemas:
- Organizar melhor as classes permitindo agrupa-las num 'espaço'.
- Permitem que existam entro do mesmo projeto, classes com o mesmo nome em namespaces diferentes.

Por exemplo, pode ter uma classe que definiu no código e juntar ao projeto uma outra classe criada por outro programador - ambas com o mesmo nome.
Não é necessário alterar o nome das classes. basta que estejam em
namespaces diferentes e o problema será resolvido

Usar namespaces dentro dos projetos de média e larga escala é uma
forma de manter o código mais bem organizado.
*/

//a expressão NAMESPACE deve ser sempre a primeira declaração no topo do script
namespace classes_principais;

// vamos criar uma classe dentro deste namespace
class Matematica
{
    public function adicionar($a, $b)
    {
        return $a + $b;
    }

    public function subtrair($a, $b)
    {
        return $a - $b;
    }
}
