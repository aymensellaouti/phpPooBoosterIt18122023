<?php 
include_once 'Person.php';
class User {


    public function __construct(protected $email, $name) {
       
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