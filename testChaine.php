<?php 
include 'class/Chaine.php';

Chaine::showNbChaine();

$chaine1 = new Chaine("ma maman est ma vie");
Chaine::showNbChaine();

$chaine2 = new Chaine("ma");
Chaine::showNbChaine();

$chaine3 = new Chaine("3");
// $chaine1->compare($chaine1, $chaine2);
// var_dump($chaine1->findPositions($chaine2));
Chaine::showNbChaine();
unset($chaine3);
Chaine::showNbChaine();
