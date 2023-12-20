<?php 
include_once 'BankAccount.php';
class CurrentAccount extends BankAccount {
    const MIN_BALANCE = -500;
    public function __construct(protected $commission = 1, float $balance) {
        if($balance < self::MIN_BALANCE) {
            throw new Exception('Balance insuffisante');
        }
        parent::__construct($balance);
    }

     /**
     * Get the value of commission
     */ 
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set the value of commission
     *
     * @return  self
     */ 
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }
    
    /**
     * Permet de déposer de l'argent sur son compte 
     * 
     * @param float $amount: Le montant à déposer
     * @return void
     */
    public function deposit(float $amount): void {
        $this->balance += $amount * ((100 - $this->commission)/100);
    }    
      public function display(): void {
       echo PHP_EOL."Compte Courant".PHP_EOL;  
       parent::display();
       echo PHP_EOL."Commission: ".$this->getCommission().PHP_EOL; 
    }

   
}