<?php 
    include_once 'class/Session.php';
/*
   1 Si c'est la première visite => elle va afficher 'bienvenu chez nous' 
   2 Si c'est la néme visite => elle va afficher Bonjour, merci pour votre fidélité, c'est votre {n}éme visite
*/
   $session = new Session();
// Si ma variable nbVisite existe c'est que je suis déjà passé par la 
    if($session->has('nbVisite')) {
    // J'incrémente mon nombre de visite de 1 puisque je fait une visite
    $nb = $session->get('nbVisite') + 1;
    // j'affiche
    echo "Bonjour, merci pour votre fidélité, c'est votre $nb éme visite";
    // Je met à jour ma session
    $session->set("nbVisite", $nb);
    // Le else c'est ma première visite
    } else {
        $session->set("nbVisite", 1);
        echo 'Bienvenu chez nous'; 
    }
    ?>

    <a href="resetSession.php">Reset</button>