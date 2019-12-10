<?php


class Database
{
    private $serverName = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASSWORD;
    private $dbname = DB_NAME;

    private $handler;
    private $stmt;
    private $errormsg;

    public function __construct()
    {
        $conn    = "mysql:host=$this->serverName;dbname=$this->dbname";
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->handler = new PDO($conn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->errormsg = $e->getMessage();
            echo $this->errormsg;
        }
    }

    public function query($sql)
    {
        $this->stmt = $this->handler->prepare($sql);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(5);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    public function lastInsertedId()
    {
        return $this->stmt->lastInsertedId();
    }
}