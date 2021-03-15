<?php

use function PHPSTORM_META\type;

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = "mysql:host=" . $this->host . ';dbname=' . $this->db_name;
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
            //code...
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }
    public function bind($param, $value, $tipe = null)
    {
        if (is_null($tipe)) {
            switch (true) {
                case is_int($value):
                    $tipe = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $tipe = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $tipe = PDO::PARAM_NULL;
                    break;
                default:
                    $tipe = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $tipe);
    }
    public function execute()
    {
        $this->stmt->execute();
    }
    public function findOne()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function findAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}
