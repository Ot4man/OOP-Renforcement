<?php
require_once 'Forme.php';
class Rectangle extends Forme {
    private $largeur;
    private $hauteur;
    public function __construct(float $largeur,float $hauteur)
    {
        if ($largeur <= 0 || $hauteur <= 0) {
            throw new InvalidArgumentException("hauteur et largeure doit etre positive stiricte");
        }
        $this->hauteur=$hauteur;
        $this->largeur=$largeur;
    }
    public function getLargeur()
    {
        return $this->largeur;
    }

    public function getHauteur()
    {
        return $this->hauteur;
    }

    public function calculerAire()
    {
        return $this->largeur * $this->hauteur;
    }
}