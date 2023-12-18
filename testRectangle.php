
<?php 

require_once 'class/Rectangle.php';

$rectangle = new Rectangle(4,3);
$rectangle2 = new Rectangle(7,2);

echo $rectangle->isBiggerOrEqualTo($rectangle2) ? " Le premier est plus grand ou égal" : " Le second est plus grand";