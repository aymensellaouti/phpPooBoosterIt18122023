<?php
include_once 'class/Director.php';

// création d'une Person puis création de l'Objet user 
// Lorsque j'instancie un User, réellement j'instancie d'abord une person puis un User 
// Du coup si un Person a besoin de quoi que ce soit pour être crée
// C'est au User de gérer ca et de fournir les propriété nécessaires 

// Quand on dit construire, on pense au à __construct donc si le __contruct de Person
// a besoin de paramètres, c'est le user qui doit les fournir 
// $user = new User('user@example.com', 'aymen');

// $user->whoAmI();

$raphael = new Director('BoosterIt', 'IT', 5500, 'Mora', 'Raphael', new DateTime('06/05/1989'));

$raphael->afficher();