<?php 
include_once 'Person.php';
class User extends Person {


    public function __construct(protected $email, $name) {
        parent::__construct($name);
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function whoAmI() {
        parent::whoAmI();
        echo "Mon mail est {$this->email}";

    }
}