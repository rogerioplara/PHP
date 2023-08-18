<?php

//FUNÇÕES

apresentar();
executar();

function apresentar(){
    echo 'Função apresentar<br>';
}

function executar(){
    echo 'Função executar';
}

for ($i=0; $i <= 10; $i++) { 
    funca_teste();
}

function funca_teste(){
    echo 'Execução da função<br>';
}

/*
Os nomes das funções deve começar por uma letro minúscula ou maiúscula, seguido de letras, algarismos e underscores

Os nomes das funções são case insensitive

apresentar() é igual a APRESENTAR()

Não podem existir duas funções com o mesmo nome dentro do mesmo namespace
*/