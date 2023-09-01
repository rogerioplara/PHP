<?php

namespace bng\Controllers;

use bng\Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        $data = [
            'nome' => 'Rogerio',
            'sobrenome' => 'Peres Lara',
        ];

        $this->view('layouts/html_header');
        $this->view('home', $data);
        $this->view('layouts/html_footer');
        /*
        require header
        conteúdo
        require footer
        */
    }
}
