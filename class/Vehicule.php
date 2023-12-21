<?php 

abstract class Vehicule {
    protected  readonly string $id;
    protected  readonly int $nbWheel;

    // Pour cette méthode quelque soit la classe qui veut être considéré 
    // comme un véhicule, elle doit implémenter la méthode run
    abstract public function run();

    public function quatreCligneton() {
        echo 'clic clack';
    }

} 