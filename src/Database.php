<?php 
namespace App;

use PDO;
use PDOException;

class Database
{
    private $host = 'localhost';
    private $db_name = 'belajar_backend';
    private $username = 'straa';
    private $password = 53715;
    public $conn;

    public function connect(){
        $this->conn = null;

        try{
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
        } catch (PDOException $e){
            echo "Error: Koneksi database gagal: " . $e->getMessage();
        }
    }
}