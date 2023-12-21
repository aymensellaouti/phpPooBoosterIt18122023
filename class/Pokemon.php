<?php 

class Pokemon {

    public function __construct(
        protected string $name,
        protected string $imageUrl,
        protected int $hp,
        protected IAttackPokemon $attackPokemon,
    ) {}


        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of imageUrl
         */ 
        public function getImageUrl()
        {
                return $this->imageUrl;
        }

        /**
         * Set the value of imageUrl
         *
         * @return  self
         */ 
        public function setImageUrl($imageUrl)
        {
                $this->imageUrl = $imageUrl;

                return $this;
        }

        /**
         * Get the value of hp
         */ 
        public function getHp()
        {
                return $this->hp;
        }

        /**
         * Set the value of hp
         *
         * @return  self
         */ 
        public function setHp($hp)
        {
                $this->hp = $hp;

                return $this;
        }

        /**
         * Get the value of attackPokemon
         */ 
        public function getAttackPokemon()
        {
                return $this->attackPokemon;
        }

        /**
         * Set the value of attackPokemon
         *
         * @return  self
         */ 
        public function setAttackPokemon($attackPokemon)
        {
                $this->attackPokemon = $attackPokemon;

                return $this;
        }

        public function isDead(): bool {
            return $this->hp <= 0;
        }

        public function attack(Pokemon $pokemon): int {
            $attaque = $this->attackPokemon->attackPoints();
            $pokemon->hp -= $attaque; 
            return $attaque;
        }

        public final function whoAmI() {
            // TODO : Ajouter les echos
        }
}