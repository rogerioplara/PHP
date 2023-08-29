<?php

namespace sys4soft;

use PDO;
use PDOException;
use stdClass;

class Database
{
    //properties
    private $_host;
    private $_database;
    private $_username;
    private $_password;
    private $_return_type;

    //recebe as configurações que nos permitem fazer a conexão com a base de dados
    //o $_return_type = 'object' define por padrão que o retorn será feito como object
    //porém posso alterar conforme a necessidade
    public function __construct($cfg_options, $return_type = 'object')
    {
        //set connection configurations -> puxa as configurações passadas na constante
        $this->_host = $cfg_options['host'];
        $this->_database = $cfg_options['database'];
        $this->_username = $cfg_options['username'];
        $this->_password = $cfg_options['password'];

        //sets the return type -> poderá ser object ou array associativo
        if (!empty($return_type) && $return_type == 'object') {
            $this->_return_type = PDO::FETCH_OBJ;
        } else {
            $this->_return_type = PDO::FETCH_ASSOC;
        }
    }

    // função que recebe um sql e pode ou não receber parametros
    public function execute_query($sql, $parameters = null)
    {
        //executes a query with results

        //connection
        $connection = new PDO(
            'mysql:host=' . $this->_host . ';dbname=' . $this->_database . ';charset=utf8',
            $this->_username,
            $this->_password,
            array(PDO::ATTR_PERSISTENT => true),
        );

        $results = null;

        try {
            //preparação/limpeza do sql passado
            $db = $connection->prepare($sql);

            //leva em conta se foram passados parâmetros
            if (!empty($parameters)) {
                $db->execute($parameters);
            } else {
                $db->execute();
            }

            //retorno dos resultados com o tipo passado por parâmetro
            $results = $db->fetchAll($this->_return_type);
        } catch (PDOException $err) {
            //close connection
            $connection = null;

            //return error
            return $this->_result('error', $err->getMessage(), $sql, null, 0, null);
        }
        //fechar a ligação
        $connection = null;

        //returno caso não tenha erro
        return $this->_result('succes', 'success', $sql, $results, $db->rowCount(), null);
    }

    public function execute_non_query($sql, $parameters = null)
    {
        //executes a query without results

        //connection
        $connection = new PDO(
            'mysql:host=' . $this->_host . ';dbname=' . $this->_database . ';charset=utf8',
            $this->_username,
            $this->_password,
            array(PDO::ATTR_PERSISTENT => true),
        );

        //init transaction
        $connection->beginTransaction();

        try {

            //preparação/limpeza do sql passado
            $db = $connection->prepare($sql);

            //leva em conta se foram passados parâmetros
            if (!empty($parameters)) {
                $db->execute($parameters);
            } else {
                $db->execute();
            }

            //last inserted id
            $last_inserted_id = $connection->lastInsertId();

            //finish transaction
            $connection->commit();
        } catch (PDOException $err) {

            //rollback commit after error / undo all sql operations on error
            $connection->rollBack();

            //close connection
            $connection = null;

            //return error
            return $this->_result('error', $err->getMessage(), $sql, null, 0, null);
        }

        //fechar a ligação
        $connection = null;

        //returno caso não tenha erro
        return $this->_result('succes', 'success', $sql, null, $db->rowCount(), $last_inserted_id);
    }

    //função de controle de erros e informações relevantes
    private function _result($status, $message, $sql, $results, $affected_rows, $last_id)
    {
        //classe anonima para devolver essas informações todas
        $tmp = new stdClass();
        $tmp->status = $status;
        $tmp->message = $message;
        $tmp->query = $sql;
        $tmp->results = $results;
        $tmp->affected_rows = $affected_rows;
        $tmp->last_id = $last_id;
        return $tmp;
    }
}
