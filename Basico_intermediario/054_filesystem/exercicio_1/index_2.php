<?php

//Podemos criar e remover pastas
// mkdir(__DIR__ . '/pasta_teste');

//se a pasta existir, vai aparecer um aviso.
//devemos sempre assegurar se a pasta ou arquivo existe
//para isso podemos usar a função file_exists()
//funciona para arquivos e pastas

if(!file_exists(__DIR__ . '/pasta_teste')){
    mkdir(__DIR__ . '/pasta_teste');
}