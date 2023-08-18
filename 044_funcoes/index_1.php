<?php

//FUNÇÕES

/*
Blocos reutilizáveis que apenas são executados quando são chamados pelo código

function nome_da_funcao(parâmetros){
    # código
}

*/

//definir uma função
function apresentar(){
    echo 'Estou dentro de uma função de PHP.';
}


echo "Estou fora da função";
echo '<br>';
apresentar();