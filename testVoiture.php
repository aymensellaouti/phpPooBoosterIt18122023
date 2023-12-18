<?php 
include_once("class/Voiture.php");
$fiesta = new Voiture('fiesta', 160, 'green', 5);
$default = new Voiture('Polo', 30);
$polo = new Voiture(brand: 'Polo', strengh: 5);

$fiesta->setColor("grise")
       ->setBrand("Fiesta")
       ->setStrengh(4)
       ->setSpeed(150)
;
//echo $fiesta->tableauDeBord();
echo $polo->tableauDeBord();