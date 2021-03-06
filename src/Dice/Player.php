<?php

namespace chrnelson\Dice;

/**
 * Class simulating a player
 */
class Player
{
    /**
     * @var string $name            The name of the player
     * @var integer $startingNumber The result of the first roll
     * @var integer $totalPoints    The total poinst collected by the player
     */
    private $name;
    private $startingNumber;
    private $totalPoints;
    //private $lastRoll;

    /**
     * Constructor to create a new Player
     *
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->startingNumber = null;
        $this->totalPoints= 0;
    }

    /**
     * Get the name of the player
     *
     * @return string as the name of the player
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the starting number of the player
     *
     * @param int the starting number
     */
    public function setStartingNumber($startingNumber)
    {
        $this->startingNumber = $startingNumber;
    }

    /**
     * Get the starting number of the player
     *
     * @return int the starting number
     */
    public function getStartingNumber()
    {
        return $this->startingNumber;
    }

    /**
     * Get the total points of the player
     *
     * @return int as the total points of the player
     */
    public function getTotalPoints()
    {
        return $this->totalPoints;
    }

    /**
     * Set the total points of the player
     *
     * @var int $points the points collected from the previous round
     */
    public function setTotalPoints($points)
    {
        $this->totalPoints = $this->totalPoints + $points;
    }
}
