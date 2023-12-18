<?php 

// Par convention le nom de la class s'écrit en
// Studlly Camel Case PaaaPaaaaPaaaaP 
class Point {

    // Groupement d'attributs representant l'état
    // des objets de la classe 
    public int $abscisse;
    public int $ordonnne;

    // Groupement de méthodes décrivant 
    // le comportament des objets de classe 

    public function __construct(int $abscisse, int $ordonnne) {
        $this->abscisse = $abscisse;
        $this->ordonnne = $ordonnne;
    }

    public function afficherInfos(): void {
        echo "abscisse = :".$this->abscisse.PHP_EOL;
        echo "ordonne = :".$this->ordonnne.PHP_EOL;
    }

    public function translate(int $x, int $y): void {
        $this->abscisse += $x;
    }
}