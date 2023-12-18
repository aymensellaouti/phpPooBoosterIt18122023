<?php 

class Student {
    public function __construct(
        private string $name,
        private array $notes,
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
         * Get the value of notes
         */ 
        public function getNotes()
        {
                return $this->notes;
        }

        /**
         * Set the value of notes
         *
         * @return  self
         */ 
        public function setNotes($notes)
        {
                $this->notes = $notes;

                return $this;
        }

        /**
         * Elle calcule la moyenne de notes de l'étudiant
         * 
         * @return float moyenne des notes de l'étudiant
         */
        public function moyenne(): float {
            if(count($this->notes) > 0) {
                return array_sum($this->notes) / count($this->notes);
            }
            return 0;
        }
}