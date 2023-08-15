<?php

    // STRINGS

    // outras formas de definir strings (menos usadas)

    // heredoc

    $texto1 = <<<TEXT
    Frase 1
    Freas 2
    Frase 3
    TEXT;

    echo $texto1; // as linhas vão aparecer sem quebras

    echo '<br>';
    echo nl2br($texto1); // as linhas vão aparecer com quebras
    echo '<br>';

    // nowdoc
    $texto2 = <<<'TEXT'
    Frase 1
    Frase 2
    Frase 3
    TEXT;

    echo nl2br($texto2); // NL2BR() -> new line to break, coloca um br em cada linha
    