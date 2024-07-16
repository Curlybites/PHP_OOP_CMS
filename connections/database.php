<?php

require_once "../connections/config.php";

class Connection
{
    private $host;
    private $user;
    private $password;
    private $db;
    private $conn;

    public function __construct()
    {
        $this->host = DB_HOST;
        $this->user = DB_USER;
        $this->password = DB_PASSWORD;
        $this->db = DB_NAME;
    }

    public function dbconnect()
    {

        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);

        if (!$this->conn->connect_error) {
            return $this->conn;
        } else {
            die('connection failed' . $this->conn->connect_error);
        }
    }

    public function closeConnection()
    {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
