<?php

// DECLARAÇÃO STRICT TYPES

/*
A linguagem PHP é muito conhecida por ser fracamente tipada. Na realidade, muitos programadores
atualmente ainda usam o PHP com variáveis, métodos e parâmetros que não definem que tipo de
valores aceitam ou retornam

Com a evolução da linguagem, apesar de não ser obrigatório, a definição de tipos nas
propriedades de uma classe, parâmetros e retorno de funções e métodos passou a ser possível
*/

function apresentar1($mensagem)
{
    echo "Mensagem: {$mensagem}<br>";
}

//adicionar o tipo do argumento
function apresentar2(String $mensagem)
{
    echo "Mensagem: {$mensagem}<br>";
}

apresentar1("Mensagem do tipo string");
apresentar2(100); //convertido implicitamente para string

// Estes exemplos vão funcionar corretamente