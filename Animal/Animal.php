<?php

abstract class Animal {
    protected string $nom;

    public function __construct(string $nom){
        $this->nom =$nom;
    }
    
abstract  public function faireDubruit();
    
    public function sePresenter() {
        return "im a {$this->nom}";
        }

}