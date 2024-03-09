<?php
class Connection
{
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $conn;
    public function __construct()
    {
        $this->host = DB_HOST;
        $this->user = DB_USERNAME;
        $this->pass = DB_PASSWORD;
        $this->dbname = DB_DATABASE;
        //$this->con = mysqli_connect('localhost', 'root', '', 'hms');

        try {
            $this->conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        } catch (PDOException $e) {
            $this->conn = null;
        }
    }
    public function getConnection()
    {
        return $this->conn;
    }
}
