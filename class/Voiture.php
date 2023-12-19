<?php

class Voiture {

    // Préparter et irriguer votre objet
    public function __construct(
        /** @var string la marque de la voiture */
        private string $brand = 'voiture',
        private int $speed = 0, 
        private string $color = 'black', 
        private int $strengh = 4, 
        private bool $engineState = false,
        private int $maxAcceleration = 10,
        private int $maxSpeed = 180,
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

    /**
     * Permet de changer l'état du moteur en 
     * jouant sur la propriété $engineState 
     */
    public function startEngine() {
        if(!$this->engineState) {
            $this->engineState = true;
            echo "Le mot est démarré";
        } else {
            echo "Le mot est déjà démarré";
        }
    }

    /**
     * Permet d'accélerer en ajoutant $acceleration et en respectant les régles suivantes
     * On ne dépasse jamais ni l'acceleration maximale ni la vitesseMaximale
     * 
     * @param $acceleration qui est l'accélération de la voiture
     */
    public function accelerate($acceleration): void {
        if($this->engineState && $acceleration <= $this->maxAcceleration) {
            $this->speed = min($acceleration+$this->speed,$this->maxSpeed);
        }
    }
    /**
     * Permet de freiner en soustrayant $reduce et en respectant les régles suivantes
     * On ne n'a jamais une vitesse inférieur à 0 
     * ni un freinage supérieurà l'accélération
     * 
     * @param $reduce qui est l'accélération de la voiture
     */
    public function brake($reduce) {
        if($this->engineState && $reduce <= $this->maxAcceleration) {
            $this->speed = max($this->speed-$reduce,0);
        }
    }

        /**
         * Get the value of engineState
         */ 
        public function getEngineState()
        {
                return $this->engineState;
        }

        /**
         * Set the value of engineState
         *
         * @return  self
         */ 
        public function setEngineState()
        {
                $this->engineState = !$this->engineState;

                return $this;
        }

        /**
         * Get the value of maxAcceleration
         */ 
        public function getMaxAcceleration()
        {
                return $this->maxAcceleration;
        }

        /**
         * Set the value of maxAcceleration
         *
         * @return  self
         */ 
        public function setMaxAcceleration($maxAcceleration)
        {
                $this->maxAcceleration = $maxAcceleration;

                return $this;
        }

        /**
         * Get the value of maxSpeed
         */ 
        public function getMaxSpeed()
        {
                return $this->maxSpeed;
        }

        /**
         * Set the value of maxSpeed
         *
         * @return  self
         */ 
        public function setMaxSpeed($maxSpeed)
        {
                $this->maxSpeed = $maxSpeed;

                return $this;
        }
}