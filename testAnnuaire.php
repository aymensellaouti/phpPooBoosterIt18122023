<?php 
include_once 'class/Person.php';
include_once 'class/Annuaire.php';
$aymen = new Person('sellaouti', 'aymen', new DateTime('1982-07-02'));
$massi = new Person('Rebout', 'Massi', new DateTime('1987-05-03'));

$annuaire = new Annuaire();
$annuaire->add($aymen);
$annuaire->add($massi);

// var_dump($annuaire->findAll());

var_dump($annuaire->findOneByCriteria('name', 'Rebout'));