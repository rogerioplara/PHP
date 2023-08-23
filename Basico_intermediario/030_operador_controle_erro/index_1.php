<?php

//OPERADOR DE CONTROLE DE ERRO
/**
 * Existem várias forma de contornar erros no PHP
 * esse operador, quando aplicado a uma expressão que vai gerar erro, ignora o erro
 */

$ficheiro = file('teste123.txt');

 /**
  * Este código vai gerar um aviso.
  * Se adicionarmos o operador de controle de erro, a mensagem desaparece e ignora a instrução
  */

$ficheiro = @file('teste123.txt');

echo 'Fim';

  /**
   * Não é aconselhável usar este operador, exceto em situações muito específicas,
   * uma vez que a supressão da mensagem de erro pode impedir que encontramos o erro no código
   */