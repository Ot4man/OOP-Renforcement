<?php 

class Admin extends Utilisateur {
    private $niveauAcces;
    public  function __construct($nom,$email,$niveauAcces) {
        parent::__construct($nom,$email);
        $this->niveauAcces=$niveauAcces;
    }
    public function getNiveauAcces()  {
        return $this->niveauAcces;
    }
}