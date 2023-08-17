<?php

//EXPRESSÃO MATCH

//é uma nova estrutura condicional que surgiu no PHP 8
//Retorna um determinado valor de acordo com a análise efeutada

$estado_encomenda = 'em processamento';

$resultado = match ($estado_encomenda) {
    'em processamento' => 'A encomenda será enviada',
    'anulada, cancelada' => 'A encomenda foi cancelada',
    'envaida' => 'A encomenda foi enviada',
    default => 'Estado desconhecido'
};

echo $resultado;