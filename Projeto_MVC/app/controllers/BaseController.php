<?php

namespace bng\Controllers;

//classe que conterá o método para importação das views
abstract class BaseController
{
    //função para importar na minha view o header e footer
    public function view($view, $data = [])
    {
        // check if data is array
        if (!is_array($data)) {
            die('Data is not an array: ' . var_dump($data));
        }

        // transforms data into variables
        extract($data);

        // includes the file if exists
        if (file_exists("../app/views/$view.php")) {
            require_once("../app/views/$view.php");
        } else {
            die("View não encontrada: $view");
        }

        // require_once('../app/views/layouts/html_header.php');
        // echo 'teste';
        // require_once('../app/views/layouts/html_footer.php');
    }
}
