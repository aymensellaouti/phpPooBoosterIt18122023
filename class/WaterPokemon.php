<?php
include_once 'Pokemon.php';
class WaterPokemon extends Pokemon
{
    function attack(Pokemon $pokemon): int
    {
        $attaque = ($this->attackPokemon->attackPoints());
        if ($pokemon instanceof FirePokemon)
            $attaque = 2 * $attaque;
        elseif ($pokemon instanceof WaterPokemon || $pokemon instanceof PlantPokemon) {
            $attaque = $attaque / 2;
        }
        $pokemon->hp-=$attaque;
        return $attaque;
    }
}