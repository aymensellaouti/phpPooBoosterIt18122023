<?php 
include_once 'class/autoloader.php';
// Je veux me connecter à ma base donc je veux récupérer l'instance HELP !!!

$db = ConnexionBD::getInstance();

$query = "SELECT * FROM `user`";
// Retourner quelque chose d'inutilisable
$response = $db->query($query);

// On va utilsier fetch si on veut un element 

// On va utilsier fetchAll si on veut +eurs elements 
$users = $response->fetchAll(PDO::FETCH_OBJ);

