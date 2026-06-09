<?php
namespace App;

// use App\Database;
use PDO;

class Model
{
    protected $db;
    protected $table;
    
    public function __construct()
    {
        $database = new Database;
        $this->db = $database->connect();
    }

    public function all()
    {
        // bikin query dinamis sesuai table
        $query = "SELECT * FROM " . $this->table;

        $stmt = $this->db->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}