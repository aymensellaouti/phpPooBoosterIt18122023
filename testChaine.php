<?php 
include 'class/Chaine.php';

$chaine1 = new Chaine("ma maman est ma vie");
$chaine2 = new Chaine("ma");

var_dump($chaine1->findPositions($chaine2));