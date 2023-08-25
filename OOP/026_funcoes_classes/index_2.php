<?php

/*
Existe um pequeno detalhe
Se as nossas classes são carregadas com spl_autoload_register()
as nossas classes não existem a não ser que sejam instanciadas
*/

function carregar_classes($nome_da_classe)
{
    $path = 'classes/' . $nome_da_classe . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
}

spl_autoload_register('carregar_classes');

//verifica se uma classe existe
//quando o autoload está ativo, utilizar o true
echo class_exists('Human', true) ? 'Sim' : 'Não';
echo '<br>';

//verifica se um método existe dentro da classe
echo method_exists('Human', 'falar') ? 'Sim' : 'Não';
echo '<br>';

//verifica se a propriedade existe dentro da classe
echo property_exists('Human', 'sobrenome') ? 'Sim' : 'Não';