<?php

namespace bng\Models;

use bng\Models\BaseModel;

class Agents extends BaseModel
{
    public function check_login($username, $password)
    {
        //define o parâmetro para consulta no banco de dados
        $params = [
            ':username' => $username,
        ];

        //faz a conexão com o banco de dados e passa a consulta, utilizando a encriptação e o nome do usuário como parâmetro
        $this->db_connect();
        $results = $this->query(
            "SELECT id, passwrd FROM agents WHERE AES_ENCRYPT(:username, '" . MYSQL_AES_KEY . "') = name",
            $params
        );

        //se não encontrar o usuário (affected_rows == 0) retorna falso
        if ($results->affected_rows == 0) {
            return [
                'status' => false
            ];
        }

        //se tiver um usuário com esse nome, verifica a senha
        //se a senha estiver incorreta, retorna falso
        if (!password_verify($password, $results->results[0]->passwrd)) {
            return [
                'status' => false
            ];
        }

        //login is ok
        return [
            'status' => true
        ];
    }

    public function get_user_data($username)
    {
        // get all necessary user data to insert in the session
        $params = [
            ':username' => $username
        ];
        $this->db_connect();

        $results = $this->query(
            "SELECT id, AES_DECRYPT(name, '" . MYSQL_AES_KEY . "') name, profile FROM agents WHERE AES_ENCRYPT(:username, '" . MYSQL_AES_KEY . "') = name",
            $params
        );

        return [
            'status' => 'SUCCESS',
            'data' => $results->results[0]
        ];
    }
}
