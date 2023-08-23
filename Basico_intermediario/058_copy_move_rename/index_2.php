<?php

// COPIAR, MOVER, RENOMEAR E ELIMINAR ARQUIVOS

//para mover um arquivo (a cópia duplicada), usamos a função rename
// rename(__DIR__ . '/file_to_move.nfo', __DIR__ . '/destino/file_to_move.nfo');

//esta função serve também para renomear o arquivo, desde que seja mantida a path
rename(__DIR__ . '/file_to_move.nfo', __DIR__ . '/new_file_to_move.nfo');
