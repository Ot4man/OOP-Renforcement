<?php
require 'Animal/Animal.php';
require 'Animal/chien.php';
require 'Animal/Chat.php';

$animaux = [
    new Chien("Regix"),
    new Chat("fifi")
];

foreach ($animaux as $animal) {
    echo $animal->sePresenter()  ;
    echo  $animal->faireDuBruit();
}