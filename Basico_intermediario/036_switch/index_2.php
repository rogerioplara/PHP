<?php

//podemos agrupar vários valores em análise para execução do mesmo bloco de código

$estado_encomenda = 'em processamento';

switch ($estado_encomenda) {
    case 'em processamento':
    case 'em análise':
        # code...
        break;

    case 'anulada':
    case 'cancelada':
    case 'inválida':
        # code...
        break;

    case 'enviada':
        # code...
        break;
        
    default:
        # code...
        break;
}