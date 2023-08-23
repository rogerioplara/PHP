<?php

//como forçar strict types?
declare(strict_types=1);

function multiplicar($a, $b): int|float { // dessa forma pode retornar um valor int ou float
    return $a * $b;
}

echo multiplicar(10.3 ,2);