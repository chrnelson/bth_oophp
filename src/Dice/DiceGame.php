<?php

namespace chrnelson\Dice;

/**
 * Class simulating a Dice Game 100
 */
class DiceGame
{

    /**
     * @var object $startingDice    Dice used to define starter
     * @var object $gameround       Simulation of game round
     * @var array $players          Array of players objects
     * @var int $gameround          Number of starting player
     */
    private $startingDice;
    public $gameround;
    private $players;
    private $starter;

    /**
     * Constructor to create and throw a dice Dice.
     *
     */
    public function __construct()
    {
        $this->players = [];

        $this->players[0] = new \chrnelson\Dice\Player("Neumann");
        $this->players[1] = new \chrnelson\Dice\Player("Du");

        $this->startingDice = new \chrnelson\Dice\Dice;

        $this->gameround = new \chrnelson\Dice\Gameround;

        $this->starter = -1;

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

        $found = false;
        $num = -1;
        while ($found == false) {
            $this->startingDice->roll();
            $this->players[0]->setStartingNumber($this->startingDice->getLastRoll());
            $this->startingDice->roll();
            $this->players[1]->setStartingNumber($this->startingDice->getLastRoll());

            if ($this->players[0]->getStartingNumber() > $this->players[1]->getStartingNumber()) {
                $found = true;
                $num = 0;
            }
            if (($this->players[0]->getStartingNumber() < $this->players[1]->getStartingNumber())) {
                $found = true;
                $num = 1;
            }
        }

        $this->starter = $num;
        $this->gameround->setPlayer($num);
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

    /**
     * Get starter
     *
     * @return integer starter player number.
     */
    public function getStarter()
    {
        return $this->starter;
    }
}
