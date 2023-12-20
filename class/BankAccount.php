<?php 

class BankAccount {

    protected string $id;

    public function __construct(protected float $balance) {
        $this->id = uniqid();
    }

    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of balance
     */ 
    public function getBalance(){
        return $this->balance;
    }
    /**
     * Set the value of balance
     *
     * @return  self
     */ 
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }
    /**
     * Permet de déposer de l'argent sur son compte 
     * 
     * @param float $amount: Le montant à déposer
     * @return void
     */
    public function deposit(float $amount): void {
        $this->balance += $amount;
    }    
    
    /**
     * Permet de retirer de l'argent sur son compte 
     * On ne peut entrer dans le rouge
     * 
     * @param float $amount: Le montant à retirer
     * @return void
     */
    public function withdraw(float $amount): void {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            throw new Exception('Insufficient amount to withdraw'); 
        }
    }    
    
    /**
     * Permet de virer de l'argent dans un autre compte
     * Retirer amount de notre compte
     * Le déposer dans l'autre compte
     * 
     * @param BankAccount $banque
     * @param float $amount: Le montant à virer
     * @return void
     */
    public function transfer(BankAccount $bankAccount, float $amount): void {
        if ($amount <= $this->balance) {
            $this->withdraw($amount);
            $bankAccount->deposit($amount);
        } else {
            throw new Exception('Insufficient amount to withdraw'); 
        }
    }
    
    /**
     * Permet d'afficher le solde present sur le compte en banque
     * 
     */
    public function display(): void {
       echo PHP_EOL."Id Account: ".$this->getId().PHP_EOL; 
       echo PHP_EOL."Balance: ".$this->getBalance().PHP_EOL; 
    }
}