<?php

class Voiture {

    // Préparter et irriguer votre objet
    public function __construct(
        /** @var string la marque de la voiture */
        private string $brand = 'voiture',
        private int $speed = 0, 
        private string $color = 'black', 
        private int $strengh = 4
    ) {}

    /**
     * Get the value of brand
     */ 
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * Nous permet de modifier la marque de la voiture
     *
     * @param string $brand qui est la marque de la voiture
     * @return Voiture l'objet elle même
     */ 
    public function setBrand(string $brand): Voiture
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed(int $speed): Voiture
    {
        if($speed <= 160)
            $this->speed = $speed;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor(string $color): Voiture
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of strengh
     */ 
    public function getStrengh(): int
    {
        return $this->strengh;
    }

    /**
     * Set the value of strengh
     *
     * @return  self
     */ 
    public function setStrengh(int $strengh): Voiture
    {
        $this->strengh = $strengh;

        return $this;
    }

    function tableauDeBord() {
        echo "============== Tableau de Bord ==================".PHP_EOL;
        echo "Marque : ".$this->brand.PHP_EOL;
        echo "Couleur : ".$this->color.PHP_EOL;
        echo "Puissance : ".$this->strengh.PHP_EOL;
        echo "Vitesse : ".$this->speed.PHP_EOL;
        echo "================================".PHP_EOL;
    }
}