<?php
include_once 'Chef.php';
class Director extends Chef
{

    public function __construct(
        protected string $compagnyName,
        string $serviceName,
        int $salary, 
        string $name, 
        string $firstName, 
        DateTime $birthday
    ) {
        parent::__construct($serviceName, $salary, $name, $firstName, $birthday);
    }

    public function afficher(): void {
        parent::afficher();
        echo "Société : {$this->compagnyName}".PHP_EOL;
    }
}
