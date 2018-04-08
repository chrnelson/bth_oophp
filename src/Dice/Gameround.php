<?php

namespace chrnelson\Dice;

/**
 * Class simulating a Dice Game game round
 */
class DiceGame
{
    /**
     * @var integer $roundNumber  The number of the round
     * @var object $player        The player who plays the round
     * @var object $diceHand      The current dice hand
     * @var integer $roundPoints  The collected points in the round
     */
    private $roundNumber;
    private $player;
    private $diceHand;
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
        $rollResults[] = $this->diceHand->values();
        if (in_array(1, $rollResults)) {
            $this->roundPoints = 0;
        } else {
            $this->roundPoints = $this->diceHand->sum();
        }
    }
}
