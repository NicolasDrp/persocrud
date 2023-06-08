<?php

namespace App\Models;

require_once 'Database.php';
require_once 'Models/Book.php';

use App\Database;

use PDO;

class BookModel{
    private $connection;

    public function __construct(){
        $this->connection = new Database();
    }
    public function getAll(){
        $query = $this->connection->getPdo()->prepare("SELECT id,name FROM perso");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, "App\Models\Perso");
    }

    public function create($book){
        $query = $this->connection->getPdo()->prepare('INSERT INTO perso (name) VALUES (:name)');
        $query->execute([
            'name' => $book['name']
        ]);
    }
}