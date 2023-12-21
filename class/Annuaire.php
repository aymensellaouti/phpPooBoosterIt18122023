<?php  

include_once 'Icrud.php';
include_once 'IDataTable.php';
include_once 'Person.php';
// 
    class Annuaire implements Icrud, IDataTable {

        /**
         * var Person[]
         */
        protected $persons = [];

        function add(Object $element) {
            $this->persons[] = $element;
        }

        function findAll(): array {
            return $this->persons;
        }

        function findOneByCriteria(string $index, $value): Person | null {
            $findPerson = null;
            // index = name => getName 
            $method = 'get'.ucfirst($index);
            if (count($this->persons) && method_exists($this->persons[0], $method)) {    
                foreach ($this->persons as $person) {
                    if ($person->{$method}() == $value) {
                        return $person;
                    }; 
                }
            }
            return $findPerson;
        }

        public function getHead(): array {
            return ['name', 'firstname', 'birthday'];
        }
        public function getData(): array {
            $data = [];
            foreach ($this->persons as $person) {
                $data[] = [
                    $person->getName(),
                    $person->getFirstname(),
                    $person->getBirthday()->format('Y-m-d'),
                ];
            }
            return $data;
        }

    }