<?php

//ESCOPO DE VARIÁVEIS

/*
O escopo de uma variável indica a fronteira dentro da qual uma variável pode ser acessada
Existe o escopo global e escopo local
De modo geral, as variáveis no PHP tem apenas um escopo, global ou local.
*/

$nome = 'joao'; // variável de escopo global

/*
Esta varivel vai estar disponível para ser usada dentro de instruções condicionais e ciclos
neste e em outros scripts que possam ser importados para o interior deste (include r require)
*/

if(true){
    echo $nome . '<br>';
}

for ($i=1; $i <= 2; $i++) { 
    echo $nome . '<br>';
}