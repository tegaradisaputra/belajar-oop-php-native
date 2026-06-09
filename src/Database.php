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
    public mixed $conn;

    public function connect(){
        $this->conn = null;

        try{
            // syntax bawaan php untuk menghubungkan ke database
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );

            // set error mode ke exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e){
            echo "Error: Koneksi database gagal: " . $e->getMessage();
        }
        
        return $this->conn;
    }

}