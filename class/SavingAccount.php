<?php 
include_once 'BankAccount.php';
class SavingAccount extends BankAccount {
    const MIN_BALANCE = 5;
    protected DateTime | null $lastInterestApplication = null;
    public function __construct(
        protected $interestRate = 1,   
        private $balance
    ) {
        if($balance < self::MIN_BALANCE) {
            throw new Exception('Balance insuffisante');
        }
        parent::__construct($balance);
    }
    
    /**
     * Permet de calcule la valeur actuelle de l'interet 
     * 
     * @return float
     */
    public function computeInterest(): float {
       return ($this->interestRate/100) * $this->balance;
    } 
    
    /**
     * Permet d'ajouter les interets si elles sont disponibles 
     * 
     * @return void
     */
    public function addInterestRate(): void {
        //    La première chose c'est de vérifier si on est ok avec la date
        // Au moins un an apres la dernière réclamtion
        $now = new DateTime();
        if (!$this->lastInterestApplication) {
           $this->deposit($this->computeInterest());
           $this->lastInterestApplication = $now;
        // Que si on une date
        } else {
            $diffrence = $now->diff($this->lastInterestApplication);
            if ($diffrence->y >= 1) {
                $this->deposit($this->computeInterest());
               $this->lastInterestApplication = $now;
            } else {
                // On crée un interval d'une année
                $dateInterval = new DateInterval('P1Y');
                echo "Vous ne pouvez pas encore réclamer vos interets, Vous pouvez les réclamer à partir de :";
                // On ajoute à la dernière date de retrait l'interval d'un an
                echo $this->lastInterestApplication->add($dateInterval)->format('Y-m-d H:i');
            }
        }

    }    
      
    public function display(): void {
       echo PHP_EOL."Compte Epargne".PHP_EOL;  
       parent::display();
       if ($this->lastInterestApplication) {
           echo PHP_EOL."Dernière date de récupération des interets: ".$this->lastInterestApplication->format('Y-m-d H:i').PHP_EOL; 
       } else {
           echo PHP_EOL."Vous n'avez pas encore réclamé vos interets".PHP_EOL;
       }
       echo PHP_EOL."Taux d'interet: ".$this->interestRate.PHP_EOL; 
    }
}