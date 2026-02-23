<?php

abstract class Employe
{
    protected string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    abstract public function calculerSalaire() :float;

    public function getInfos()
    {
        return "Employe: $this->nom, Salaire: " . $this->calculerSalaire();
    }
}