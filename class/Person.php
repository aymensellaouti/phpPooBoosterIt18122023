<?php

class Person
{

    protected string $name;
    protected string $firstName;
    protected DateTime $birthday;
    public function __construct(string $name, string $firstName, DateTime $birthday) {
        $this->name = $name;
        $this->firstName = $firstName;
        $this->birthday = $birthday;
    }

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

    public function whoAmI()
    {
        echo "Je m'appelle {$this->name}".PHP_EOL;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of birthday
     */ 
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set the value of birthday
     *
     * @return  self
     */ 
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function afficher(): void {
        echo "Nom : {$this->name}".PHP_EOL;
        echo "Prénom : {$this->firstName}".PHP_EOL;
        echo "Date de naissance : {$this->birthday->format('D, d M Y')}".PHP_EOL;
    }
}
