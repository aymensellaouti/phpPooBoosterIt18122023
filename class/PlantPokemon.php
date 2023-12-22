<?php
include_once 'Pokemon.php';
class PlantPokemon extends Pokemon
{
    function attack(Pokemon $pokemon): int
    {
        $attaque = ($this->attackPokemon->attackPoints());
        if ($pokemon instanceof WaterPokemon)
            $attaque = 2 * $attaque ;
        elseif ($pokemon instanceof FirePokemon || $pokemon instanceof PlantPokemon) {
            $attaque = $attaque / 2;
        }
        $pokemon->hp-=$attaque;
        return $attaque;
    }
}