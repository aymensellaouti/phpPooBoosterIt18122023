<?php 
    include_once 'class/autoloader.php';
    // Je veux me connecter à ma base donc je veux récupérer l'instance HELP !!!
    
    // On doit revoir un id en GET
    // On doit vérifier l'existance de l'ID
    if (!isset($_GET['id'])) { 
        header('location:users.php');   
    } else { 
        $id = $_GET['id'];
        // S'il n'existe pas on le renvoi vers la page users.php
        // Si l'id existe
        // On va chercher le user d'id id 
        $db = ConnexionBD::getInstance();
        $query = "SELECT * FROM `user` WHERE `id` = '$id'";
        // Retourner quelque chose d'inutilisable
        $response = $db->query($query);
        
        // On va utilsier fetch si on veut un element 
        $user = $response->fetch(PDO::FETCH_OBJ);
        // On le trouve => affiche
        // On ne le retrouve pas => affiche un message user innexistant
    }
    ?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <title>User Details</title>
</head>

<body>
    <div class="container">
      <?php
        if (!$user) { 
      ?>  
        <div class="alert alert-danger">
            Utilisateur innexistant
        </div>
      <?php } else { ?>
        <div class="alert alert-success">
            <ol class="list-group">
                <li class="list-group-item">
                    Name : <?=$user->name ?>
                </li>
                <li class="list-group-item">
                    Birthday : <?=$user->birthday ?>
                </li>
            </ol>
        </div>
      <?php }  ?>
    </div>
   


    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>