<?php

require_once 'Employe.php';

class Developpeur extends Employe
{
    private  $salaireFixe;

    public function __construct($nom, $salaireFixe)
    {
        parent::__construct($nom);
        $this->salaireFixe = $salaireFixe;
    }

    public function calculerSalaire():float
    {
        return $this->salaireFixe;
    }
}