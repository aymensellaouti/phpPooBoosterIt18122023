<?php 
include_once 'IAttackPokemon.php';
class AttackPokemon implements IAttackPokemon {

    public function __construct(
        protected int $minAttack,
        protected int $maxAttack,
        protected int $specialAttack,
        protected int $probabilitySpecialAttack,
    ) {}

        /**
         * Get the value of minAttack
         */ 
        public function getMinAttack()
        {
                return $this->minAttack;
        }

        /**
         * Set the value of minAttack
         *
         * @return  self
         */ 
        public function setMinAttack($minAttack)
        {
                $this->minAttack = $minAttack;

                return $this;
        }

        /**
         * Get the value of maxAttack
         */ 
        public function getMaxAttack()
        {
                return $this->maxAttack;
        }

        /**
         * Set the value of maxAttack
         *
         * @return  self
         */ 
        public function setMaxAttack($maxAttack)
        {
                $this->maxAttack = $maxAttack;

                return $this;
        }

        /**
         * Get the value of specialAttack
         */ 
        public function getSpecialAttack()
        {
                return $this->specialAttack;
        }

        /**
         * Set the value of specialAttack
         *
         * @return  self
         */ 
        public function setSpecialAttack($specialAttack)
        {
                $this->specialAttack = $specialAttack;

                return $this;
        }

        /**
         * Get the value of probabilitySpecialAttack
         */ 
        public function getProbabilitySpecialAttack()
        {
                return $this->probabilitySpecialAttack;
        }

        /**
         * Set the value of probabilitySpecialAttack
         *
         * @return  self
         */ 
        public function setProbabilitySpecialAttack($probabilitySpecialAttack)
        {
                $this->probabilitySpecialAttack = $probabilitySpecialAttack;

                return $this;
        }

        public function attackPoints(): int {
            // attaque simple
            $simpleAttaque = rand($this->minAttack, $this->maxAttack);
            // Probabilité d'une attaque spéciale 
            $isSpecialAttackProbability = random_int(0,100);
            $isSpecialAttaque = $isSpecialAttackProbability <= $this->probabilitySpecialAttack ? 1 : 0;
            // attaque  
            return $isSpecialAttaque ? ($simpleAttaque * $this->specialAttack) : $simpleAttaque;
        }
}