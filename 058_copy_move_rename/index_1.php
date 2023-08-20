<?php

// COPIAR, MOVER, RENOMEAR E ELIMINAR ARQUIVOS

//para copiar um ficheiro
copy(__DIR__ . '/origem/file1.nfo', __DIR__ . '/destino/file1.nfo');

//na cópia podemos alterar o nome do arquivo de destino
copy(__DIR__ . '/origem/file1.nfo', __DIR__ . '/destino/new_file.nfo');

//IMPORTANTE: Se o arquivo de destino existir, vai ser substituido
