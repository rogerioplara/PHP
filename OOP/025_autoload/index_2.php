<?php

// AUTOLOAD

/*
Desde o PHP 5.1.2 existe a possibilidade de usar uma função
designada por spl_autoload_register()

Esta função requer um parâmetro. O parâmetro deverá ser uma
função que vai fazer o require. Sempre que tentarmos criar
um objeto a partir de uma classe, e se essa classe ainda
não foi carregada para o nosso código, o PHP vai procurar
a existência da função spl_autoload_register
*/

function carregar_classes($nome_da_classe)
{
    $path = 'classes/' . $nome_da_classe . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
}

spl_autoload_register('carregar_classes');

//criamos as instâncias de cada uma das classes

$h = new Humano();
$a = new Animal();