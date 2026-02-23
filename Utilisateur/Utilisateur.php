<?php

class Utilisateur
{
    private string $nom;
    private string $email;
    private static int $compteur = 0;

    public function __construct($nom,  $email)
    {
        $this->nom = $nom;
        $this->email = $email;

        self::$compteur++; 
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public static function getTotalUtilisateurs()
    {
        return self::$compteur;
    }
}