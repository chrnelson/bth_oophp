<?php

namespace chrnelson\Dice;

/**
 * Class simulating a dice
 */
class Dice
{
    /**
     * @var integer $sides  The dice number of sides on the dice
     * @var integer $age    The result of the latest roll
     */
    private $sides;
    private $lastRoll;

    /**
     * Constructor to create and throw a dice Dice.
     *
     * @throws PersonAgeException when age is negative.
     *
     */
    public function __construct($sides = 6)
    {
        $this->sides = $sides;
    }

    /**
     * Roll the dice and get the number
     *
     * @return integer as the thrown number.
     *
     */
    public function roll()
    {
        $this->lastRoll = rand(1, $this->sides);
        return $this->lastRoll;
    }

    /**
     * Get the latest thrown number from the dice
     *
     * @return integer as the thrown number.
     */
    public function getLastRoll()
    {
        return $this->lastRoll;
    }
}
