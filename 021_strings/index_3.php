<?php

// STRINGS

// heredoc e nowdoc pode ser um recurso para textos longos

$valor1 = 100;
$valor2 = 200;
$valor3 = 300;

$relatorio = <<<TEXT
O valor 1 = $valor1
O valor 2 = $valor2
O valor 3 = $valor3
TEXT;

echo nl2br($relatorio);

// ou então para apresentar HTML

$html = <<<TEXT
<h1>Título</h1>
<hr>
<p>Texto para efeito de testes</p>
TEXT;

echo $html;