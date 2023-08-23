<?php

//EXPRESSÃO CONDICIONAL SWITCH

//muito semelhante ao if elseif else
//o parâmetro é o valor a ser avaliado
//cada case verifica se o valor é igual e executa o código

//break: ignora o resto do código

//default: executa se nenhuma outra comparação for verdadeira

$estado_encomenda = 'em processamento';

switch($estado_encomenda){
    case 'em processamento':
        echo "Em processamento, será enviado em breve";
        break;
    case 'anulada';
        echo "Compra cancelada";
        break;
    case 'enviada';
        echo "Enviada! Em breve chegará em seu endereço";
        break;
    case 'entregue';
        echo "Sua encomenda já foi entregue!";
        break;
    default:
        echo "Erro :( encomenda não encontrada";
        break;
}