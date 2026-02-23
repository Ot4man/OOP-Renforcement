<?php

require_once 'Employe.php';

class Commercial extends Employe
{
    private float $salaireFixe;
    private float $commission;

    public function __construct(string $nom, float $salaireFixe, float $commission)
    {
        parent::__construct($nom);
        $this->salaireFixe = $salaireFixe;
        $this->commission = $commission;
    }

    public function calculerSalaire(): float
    {
        return $this->salaireFixe + $this->commission;
    }
}