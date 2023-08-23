<?php

//ARRAYS
// indices alfanuméricos

$empresa = [
    'ceo' => "joao",
    'administrador' => "ana",
    'executivo' => "carlos",
    'contador' => "cristina"
];

echo '<pre>';
print_r($empresa);
echo '</pre>';

//para apresentar um valor, usamos a key
echo $empresa['administrador'];

//podemos adicionar mais valores
$empresa['operario'] = "antonio";
echo '<pre>';
print_r($empresa);
echo '</pre>';