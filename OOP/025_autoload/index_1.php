<?php

// AUTOLOAD DE CLASSES

/*
Até então vimos que, para usar as classes que criamos, é
necessário fazer a importação do script ou scripts que contêm
essas classes. Neste vídeo vamos ver como é possível fazer o 
carregamento das classes de forma automática.

Temos duas classes criadas dentro da pasta classes
É uma boa prática cada classe ter seu arquivo próprio
*/

//Na metodologia tradicional
require_once 'classes/Humano.php';
require_once 'classes/Animal.php';

//Esta metodologia funciona bem, se tiver poucas classes para carregar