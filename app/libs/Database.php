<?php

class Database
{
    private $dbhost = DB_HOST;
    private $dbname = DB_NAME;
    private $dbuser = DB_USER;
    private $dbpass = DB_PASS;

    private $dbh, $stmt;


    public function __construct()
    {
        $str = "mysql:host=" . $this->dbhost . ";dbname=" . $this->dbname;

        $opt = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try
        {
            if(empty($this->dbh))
            {
                $this->dbh = new PDO($str, $this->dbuser, $this->dbpass, $opt);
            }

        }catch(PDOException $e)
        {
            exit($e->getMessage());
        }


    }

    # QUERY 

    public function query($qry)
    {
        $this->stmt = $this->dbh->prepare($qry);
    }

    # BIND DATA

    public function bind($param, $value, $type = '')
    {
        if(empty($type))
        {

            switch($value)
            {
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

        $this->stmt->bindValue($param, $value, $type);
    }

    # EXECUTE

    public function executedb(){
        $this->stmt->execute();
    }


    public function fetchall(){
        $this->executedb();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function fetchone()
    {
        $this->executedb();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }


}