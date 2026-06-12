<?php

class Koneksi
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "DB_LATIHAN_PBO_TRPL1A_ElangPanca";

    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );

        if ($this->conn->connect_error) {
            die("Koneksi Gagal: " . $this->conn->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
?>