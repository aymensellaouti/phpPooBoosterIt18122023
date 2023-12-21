<?php

class RoundInfos
{
    public function __construct(
        private int $roundNumber = 0,
        private int $player1Attack,
        private int $player2Attack,
    ){}

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

    /**
     * @return int
     */
    public function getPlayer1Attack(): int
    {
        return $this->player1Attack;
    }

    /**
     * @param int $player1Attack
     */
    public function setPlayer1Attack(int $player1Attack): void
    {
        $this->player1Attack = $player1Attack;
    }

    /**
     * @return int
     */
    public function getPlayer2Attack(): int
    {
        return $this->player2Attack;
    }

    /**
     * @param int $player2Attack
     */
    public function setPlayer2Attack(int $player2Attack): void
    {
        $this->player2Attack = $player2Attack;
    }


}