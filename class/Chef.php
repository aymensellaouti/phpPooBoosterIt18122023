<?php
include_once 'Employee.php';
class Chef extends Employee
{

    public function __construct(
        protected string $serviceName,
        int $salary, 
        string $name, 
        string $firstName, 
        DateTime $birthday
    ) {
        parent::__construct($salary, $name, $firstName, $birthday);
    }

    public function afficher(): void {
        parent::afficher();
        echo "Service : {$this->serviceName}".PHP_EOL;
    }
}
