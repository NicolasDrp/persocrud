<?php

namespace App\Models;

require_once 'Database.php';
require_once 'Models/Perso.php';

use App\Database;

use PDO;

class PersoModel {
    private $connection;

    public function __construct() {
        $this->connection = new Database();
    }
    public function getAll() {
        $query = $this->connection->getPdo()->prepare("SELECT * FROM perso");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, "App\Models\Perso");
    }

    public function create($perso) {
        $query = $this->connection->getPdo()->prepare('INSERT INTO perso (name, class, race, statAtk, statDef) VALUES (:name, :class, :race, :statAtk, :statDef)');
        $query->execute([
            'name' => $perso['name'],
            'class' => $perso['class'],
            'race' => $perso['race'],
            'statAtk' => $perso['statAtk'],
            'statDef' => $perso['statDef'],
        ]);
    }
}
