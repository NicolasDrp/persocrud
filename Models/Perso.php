<?php

namespace App\Models;

class Perso
{
    private $id;
    private $name;
    private $class;
    private $race;
    private $statAtk;
    private $statDef;

    public function __construct($name, $class, $race, $statAtk, $statDef)
    {
        $this->name = $name;
        $this->class = $class;
        $this->race = $race;
        $this->statAtk = $statAtk;
        $this->statDef = $statDef;
    }


    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getClass()
    {
        return $this->class;
    }
    public function setClass($class)
    {
        $this->class = $class;
    }
    public function getRace()
    {
        return $this->race;
    }
    public function setRace($race)
    {
        $this->race = $race;
    }
    public function getStatAtk()
    {
        return $this->statAtk;
    }
    public function setStatAtk($statAtk)
    {
        $this->statAtk = $statAtk;
    }
    public function getStatDef()
    {
        return $this->statDef;
    }
    public function setStatDef($statDef)
    {
        $this->statDef = $statDef;
    }
}
