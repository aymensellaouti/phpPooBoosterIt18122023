<?php
include_once 'Person.php';
class Employee extends Person
{

    public function __construct(
        protected int $salary, 
        string $name, 
        string $firstName, 
        DateTime $birthday
    ) {
        parent::__construct($name, $firstName, $birthday);
    }

    public function afficher(): void {
        parent::afficher();
        echo "Salaire : {$this->salary}".PHP_EOL;
    }
}
