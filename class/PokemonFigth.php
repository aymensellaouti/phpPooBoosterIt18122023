<?php
include_once 'RoundInfos.php';
class PokemonFight
{
    private int $roundNumber = 0;

    /**
     * @var RoundInfos[]
     */
    private array $roundInfos = [];
    public function __construct(
        private Pokemon $pokemon1,
        private Pokemon $pokemon2
    ){}

    /**
     * @return array
     */
    public function getRoundInfos(): array
    {
        return $this->roundInfos;
    }

    public function round(): bool {
        // Si les deux pokemons sont vivant on joue
        if (!$this->pokemon1->isDead() && !$this->pokemon2->isDead()) {
            // incrémenter le nombre de round
            $this->roundNumber++;
            // Lancer le combat 1 attaque 2 et 2 attaque 1
            $player1Attaque = $this->pokemon1->attack($this->pokemon2);
            $player2Attaque = $this->pokemon2->attack($this->pokemon1);
            // créer une roundInfo
            $roundInfo = new RoundInfos($this->roundNumber, $player1Attaque, $player2Attaque );
            // Ajouter ces infos dans mon tableau de round
            $this->roundInfos[] = $roundInfo;
            return true;
        }
        //Sinon on ne joue pas 
        return false;
    }
    public function play(): void {
        // Je continue de jouer jusqu'à la mort d'un des deux pokemons
        while($this->round()) {}
    }
    /**
     * @return int
     */
    public function getRoundNumber(): int
    {
        return $this->roundNumber;
    }

    /**
     * @param int $roundNumber
     */
    public function setRoundNumber(int $roundNumber): void
    {
        $this->roundNumber = $roundNumber;
    }

    public function getFighters(): array {
        return [$this->pokemon1,$this->pokemon2];
    }

    public function getWinner(): false | Pokemon {
        if (!$this->pokemon1->isDead() && !$this->pokemon2->isDead()) {
            return false;
        }
        return $this->pokemon1->getHp() > $this->pokemon2->getHp() ? $this->pokemon1 : $this->pokemon2;
    }
}