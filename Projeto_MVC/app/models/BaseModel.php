<?php

namespace bng\Models;

use bng\System\Database;

abstract class BaseModel
{
    public $db;

    // Estabelecer a conexão com a base de dados
    public function db_connect()
    {
        // Constantes presentes na config.php
        $options = [
            'host' => MYSQL_HOST,
            'database' => MYSQL_DATABASE,
            'username' => MYSQL_USERNAME,
            'password' => MYSQL_PASSWORD,
        ];
        $this->db = new Database($options);
    }

    public function query($sql = "", $params = [])
    {
        return $this->db->execute_query($sql, $params);
    }
}
