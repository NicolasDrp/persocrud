<?php

namespace App\Controllers;

require_once 'Models/PersoModel.php';

use App\Models\Perso;
use App\Models\PersoModel;

class PersoController
{
    protected $persoModel;

    public function __construct()
    {
        $this->persoModel = new PersoModel();
    }

    public function getIndex()
    {
        $persos = $this->persoModel->getAll();
        require_once 'Views/persos/index.php';
    }

    public function getCreate()
    {
        require_once 'Views/persos/create.php';
    }

    public function postCreate()
    {
        $perso = $_POST;
        $this->persoModel->create($perso);

        header('Location: ../perso/index');
    }
}
