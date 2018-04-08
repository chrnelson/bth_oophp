<?php

namespace chrnelson\Dice;

/**
 * Class simulating a Dice Game 100
 */
class DiceGame
{

    /**
     * @var int $dices   Number of players
     * @var int $values  Number of dices
     */
    private $dices;
    private $startingDice;
    private $players;
    private $computer;

    /**
     * Constructor to create and throw a dice Dice.
     *
     * @throws PersonAgeException when age is negative.   !!!
     *
     */
    public function __construct()
    {
        $this->dices  = [];
        $this->players = [];


        $this->players[] = new \chrnelson\Dice\Player("Du");
        $this->players[] = new \chrnelson\Dice\Player("Neumann");

        $this->startingDice = new \chrnelson\Dice\Dice;

        $this->findStarter();
    }

    /**
     * Roll the dice and get the number
     *
     * @return integer as the thrown number.
     *
     */
    public function findStarter()
    {

        for ($i = 0; $i < sizeof($this->players); $i++) {
            $this->startingDice->roll();
            $this->players[$i]->setStartingNumber($this->startingDice->getLastRoll());
        }
    }

    /**
     * Get player
     *
     * @return array of player objects.
     */
    public function getPlayers()
    {
        return $this->players;
    }
}
