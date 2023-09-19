<?php

namespace bng\Controllers;

use bng\Controllers\BaseController;
use bng\Models\Agents;

class Main extends BaseController
{
    public function index()
    {
        //verifica se não tem ninguém conectado na sessão, se tiver, continua a execução e mostra o Olá mundo abaixo -> vai mostrar o painel inicial após a implementação
        if (!check_session()) {
            $this->login_frm();
            return;
        }

        $this->view('layouts/html_header');
        echo '<h3 class="text-white text-center">Olá Mundo!</h3>';
        $this->view('layouts/html_footer');
    }

    // ------------------------
    // LOGIN
    // ------------------------
    public function login_frm()
    {
        //checa se tem alguém conectado na sessão
        if (check_session()) {
            $this->index();
            return;
        }

        //check if there are errors (after login_submit)
        $data = [];
        if (!empty($_SESSION['validation_errors'])) {
            $data['validation_errors'] = $_SESSION['validation_errors'];
            unset($_SESSION['validation_errors']);
        }

        // Verifica se houve um login inválido
        if (!empty($_SESSION['server_error'])) {
            $data['server_error'] = $_SESSION['server_error'];
            unset($_SESSION['server_error']);
        }

        //display login form
        $this->view('layouts/html_header');
        $this->view('login_frm', $data);
        $this->view('layouts/html_footer');
    }

    public function login_submit()
    {
        //check if there is already an active session
        if (check_session()) {
            $this->index();
            return;
        }

        //check if there was a post request
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            $this->index();
            return;
        }

        //form validation
        $validation_errors = [];
        if (empty($_POST['text_username']) || empty($_POST['text_password'])) {
            $validation_errors[] = "Usuário e senha são obrigatórios.";
        }

        //get form data
        $username = $_POST['text_username'];
        $password = $_POST['text_password'];

        //check if username is a valid email
        if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $validation_errors[] = 'O usuário deve ser um email válido.';
        }

        //check if username is between 5 and 50 chars
        if (strlen($username) < 5 || strlen($username) > 50) {
            $validation_errors[] = 'O usuário deve ter entre 5 e 50 caracteres.';
        }

        //check if password is valid
        if (strlen($password) < 6 || strlen($password) > 12) {
            $validation_errors[] = 'A senha deve ter entre 6 e 12 caraceteres.';
        }

        //check if there are validation errors
        if (!empty($validation_errors)) {
            $_SESSION['validation_errors'] = $validation_errors;
            $this->login_frm();
            return;
        }

        //crio um novo model do agente -> faço a chamada do check_login e adiciono na variável result;
        //caso a variável result tiver o status true, retorna OK, caso contrário NOK
        $model = new Agents();
        $result = $model->check_login($username, $password);
        if (!$result['status']) {
            // login invalido
            $_SESSION['server_error'] = 'Login inválido';
            $this->login_frm();
            return;
        }

        // carregar os dados do usuário na sessão
        $results = $model->get_user_data($username);

        // adicionar o usuário à sessão
        $_SESSION['user'] = $results['data'];

        echo 'OK';
    }
}

/*
admin@bng.com - Aa123456
agent1@bng.com - Aa123456
agent2@bng.com - Aa123456
*/