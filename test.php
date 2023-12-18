<?php 
require_once 'class/Point.php';
$point1 = new Point(5,4);

// Qu'est ce que je suis entrain de faire ??
$p3 = $point1;
$p4 = clone $point1;
if ($point1 === $p4) {
    echo "===";
}

if ($point1 == $p4) {
    echo "==";
}
$p4->abscisse = 100;
$p4->ordonnne = 100;

$point1->afficherInfos();
// $point1->abscisse = 5;
// $point1->ordonnne = 7;

// $point2 = new Point(6,3);
// $point2->abscisse = 5;
// $point2->ordonnne = 7;
