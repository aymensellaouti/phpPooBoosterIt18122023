<?php

include_once 'class/autoloader.php';
// 1- Je vérifier est ce qu'elle est déjà incluse dans ce script 

// 2- Il existe dans PHP une pile d'autoloader il va commencer à) empiler les fonctions une par une 
// Dans chaque il va passe le nom de la classe en paramètre 

$dracauFeuGigamaxAttackPokemon = new AttackPokemon(10, 100, 2, 20);
$dracauFeuGigamax = new FirePokemon('Dracaufeu Gigamax', 'https://www.pokepedia.fr/images/thumb/8/8b/Dracaufeu_%28Gigamax%29-EB.png/611px-Dracaufeu_%28Gigamax%29-EB.png?20191016133231', 200, $dracauFeuGigamaxAttackPokemon);
$pikachuGigamaxAttackPokemon = new AttackPokemon(30, 80, 4, 20);
$pikachuWaterGigamax = new WaterPokemon('Pikachu Gigamax', 'https://www.pokepedia.fr/images/thumb/7/73/Pikachu_%28Gigamax%29-EB.png/250px-Pikachu_%28Gigamax%29-EB.png', 200, $pikachuGigamaxAttackPokemon);

$fight = new PokemonFight($dracauFeuGigamax, $pikachuWaterGigamax);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Pokemon </title>
</head>
<body>
<div class="container">
    <div class="alert alert-info">
        <div>Les combattants</div>
    </div>

        <?php include 'figherstInfo.php';?>
    <?php
        while($fight->round()) {
            $roundNumber = $fight->getRoundNumber();
            $player1Attaque = $fight->getRoundInfos()[$roundNumber - 1]->getPlayer1Attack();
            $player2Attaque = $fight->getRoundInfos()[$roundNumber - 1]->getPlayer2Attack();
    ?>
            <div class="alert alert-danger">
                Round <?=$roundNumber  ?>
                <div class="alert alert-secondary row">
                    <div class="col-6">
                        <?= $player1Attaque ?>
                    </div>
                    <div class="col-6">
                        <?= $player2Attaque ?>
                    </div>
                </div>
            </div>
            <?php
            include 'figherstInfo.php';
        }
    ?>
    <div class="alert alert-success">Le vainqueur est
        <img
            class="rounded-circle"
            src="<?= $fight->getWinner()->getImageUrl() ?>"
            width="150px"
            height="150px"
            alt="pikachuFeuGigamax">
    </div>

</div>
</body>
</html>
