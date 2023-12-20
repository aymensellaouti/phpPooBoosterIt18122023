<?php

class Person
{

    public function __construct(protected $name) {
        
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
}
