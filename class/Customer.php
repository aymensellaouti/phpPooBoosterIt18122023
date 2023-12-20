<?php 
include_once 'Person.php';
class Customer extends Person {
    protected readonly string $id;

    public function __construct(
        string $name, string $firstName, DateTime $birthday, 
        protected BankAccount | null $bankAccount = null
    ) {
        parent::__construct($name, $firstName, $birthday);
        $this->id = uniqid();
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    public function deposit($amount): void {
        $this->bankAccount->deposit($amount);
    }
    public function withdraw($amount): void {
        $this->bankAccount->withdraw($amount);
    }

    public function show() {
        echo PHP_EOL."Les informations du client ".PHP_EOL; 
        parent::whoAmI();
        if(!$this->bankAccount) {
            echo "Ce client ne dispose pas encore d'un compte bancaire";
        } else {
            $this->bankAccount->display();
        }
    }
}