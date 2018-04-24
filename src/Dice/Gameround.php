<?php

namespace chrnelson\Dice;

/**
 * Class simulating a Dice Game game round
 */
class Gameround
{
    /**
     * @var integer $roundNumber  The number of the round
     * @var object $player        The player who plays the round
     * @var object $diceHand      The current dice hand
     * @var integer $roundPoints  The collected points in the round
     */
    private $roundNumber;
    private $player;
    public $diceHand;
    private $roundPoints;


    /**
     * Constructor for a new game round (only done once per game).
     *
     */
    public function __construct()
    {
        $this->roundNumber = 0;
        $this->diceHand = new DiceHand();
        $this->roundPoints = 0;
    }

    /**
     * New game round
     *
     */
    public function startRound()
    {
        $this->roundNumber++;
        $this->roundPoints = 0;
        $this->diceHand->roll();
        $rollResults = $this->diceHand->values();
        if (in_array(1, $rollResults, true)) {
            $this->roundPoints = 0;
        } else {
            $this->roundPoints = $this->diceHand->sum();
        }
    }

    /**
     * Continue game round
     *
     */
    public function continueRound()
    {
        $this->roundNumber++;
        $this->diceHand->roll();
        $rollResults = $this->diceHand->values();
        if (in_array(1, $rollResults, true)) {
            $this->roundPoints = 0;
        } else {
            $this->roundPoints += $this->diceHand->sum();
        }
    }

    /**
     * Get game round number
     *
     */
    public function getRoundNumber()
    {
        return $this->roundNumber;
    }

    /**
     * Set the player of the round
     * @var int $player The number of the player
     */
    public function setPlayer($player)
    {
        $this->player = $player;
    }

    /**
     * Get the player of the round
     * @return integer The number of the player
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Get the collected points in the round
     * @return integer The number of points
     */
    public function getRoundPoints()
    {
        return $this->roundPoints;
    }
}
