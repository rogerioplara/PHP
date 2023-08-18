<?php

//como forçar strict types?
declare(strict_types=1);

function multiplicar($a, $b): int {
    return $a * $b;
}

echo multiplicar(10,2);