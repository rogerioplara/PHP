<?php

declare(strict_types=1);


function adicionar(int $a, int $b): int // tipo de retorno deverá ser inteiro
{
    return $a + $b;
}

echo adicionar(10, 20);
echo adicionar('10', '20');
