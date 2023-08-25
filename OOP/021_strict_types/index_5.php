<?php

declare(strict_types=1);

class Pessoa
{
    public String $nome;
    public String $apelido;
    public int $altura;

    public function falar(string $mensagem): string
    {
        return "O meu nome é {$this->nome} e a mensagem é {$mensagem}";
    }
}

$p = new Pessoa();
$p->nome = "Rogerio Peres";
echo $p->falar("Bom dia!");

/*
Estes conceitos são importantes numa linguagem de programação, uma vez que permitem evitar
erros inconvenientes.
A maior parte das linguagens de programação de alto nível usam variáveis tipadas. Esse é o 
caminho a seguir no PHP para alcançar as melhores práticas como programador.
*/
