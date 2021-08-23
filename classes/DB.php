<?php
class DB
{
    private static $_instance;
    private $_pdo,
        $_query,
        $_error = false,
        $_results,
        $_count = 0;

    private function __construct()
    {
        try {
            $this->_pdo = new PDO('mysql:host=' . Config::get('mysql/host') . ';dbname=' . Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password'));

            if ($this->_pdo) {
                echo 'connected';
            }
        } catch (\PDOException $th) {
            //throw $th;
            die($th->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new DB;
        }

        return self::$_instance;
    }
}
