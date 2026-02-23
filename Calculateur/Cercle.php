<?php

require_once 'Forme.php';

class Cercle extends Forme
{
    private float $rayon;

    public function __construct(float $rayon)
    {
        if ($rayon <= 0) {
            throw new InvalidArgumentException("Le rayon doit être positif.");
        }

        $this->rayon = $rayon;
    }

    public function getRayon()
    {
        return $this->rayon;
    }

    public function calculerAire()
    {
        return pi() * pow($this->rayon, 2);
    }
}