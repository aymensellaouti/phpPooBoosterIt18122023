<?php 

function autoload($className) {
    // echo "Je suis dans l'autoloader et je récupére le nom de classe suivant $className";
    include_once "class/$className.php";    
}

// Va mettre dans la pile d'autoloader notre fonction autoload
spl_autoload_register('autoload');