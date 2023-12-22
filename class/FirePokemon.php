<?php
include_once 'Pokemon.php';
class FirePokemon extends Pokemon
{
    function attack(Pokemon $pokemon): int
    {
        $attaque = ($this->attackPokemon->attackPoints());
        if ($pokemon instanceof PlantPokemon){
            $attaque = 2 * $attaque;
        }
        elseif ($pokemon instanceof WaterPokemon || $pokemon instanceof FirePokemon) {
            $attaque = $attaque / 2;
        }
        $pokemon->hp-= $attaque;
        return $attaque;
    }

}