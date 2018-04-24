<?php

namespace Anax\View;

/**
 * Template file to render a view.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

?>

<h1><?= $title ?></h1>

<p>Välkommen att spela Tärningsspel 100 mot datorn, som går under sin gammelfarfars namn Neumann. Den som först når 100 poäng vinner.</p>

<p>För varje tärningskast, som görs med två tärningar, får du poäng enligt vad tärningarna visar. Men om du har otur och en tärning visar 1 förlorar du alla dina poäng och turen går över till motståndaren. Om ingendera tärningen visar 1 skall du ta ställning till om du vill spela säkert och spara poängen till protokollet eller om du vill chansa på ett nytt tärningskast för att samla fler poäng - eller förlora alla poäng...



<form method="POST">
    <input type="hidden" name="roundNumber" value="1">
    <input type="submit" name="reset" value="Nollställ och starta nytt spel">


<br>
<?php

$gameOver = false;

echo "<h4>Ställningen i spelet just nu</h4>";

if ($gameround == 0) {
    for ($i = 0; $i < sizeof($players); $i++) {
        echo $players[$i]->getName() . " har " . $players[$i]->getTotalPoints() .  " poäng och första tärningskastet blev " . $players[$i]->getStartingNumber() . ".<br>";
    }
    echo $players[$dicegame->getStarter()]->getName() . " kastade högre och får börja spelet.<br>";
    echo "<input type='submit' name='newRound' value='Starta omgång'>";
} else {
    for ($i = 0; $i < sizeof($players); $i++) {
        echo $players[$i]->getName() . " har " . $players[$i]->getTotalPoints() .  " poäng. <br>";
    }
    echo "------------------------------------<br>";
    echo "Nu spelar " . $players[$dicegame->gameround->getPlayer()]->getName() . "<br>";
    echo "Omgång nummer: " . $gameround . "<br>";
    echo "Resultat av tärningskast: " . implode(",", $dicegame->gameround->diceHand->values()) . "<br>";
    echo "Summa: " . $dicegame->gameround->getRoundPoints() . ".<br>";

    if (($dicegame->gameround->getRoundPoints() + $players[$dicegame->gameround->getPlayer()]->getTotalPoints()) >= 100) {
        echo "GRATTIS! " . $players[$dicegame->gameround->getPlayer()]->getName() . " har vunnit med totalt " . ($dicegame->gameround->getRoundPoints() + $players[$dicegame->gameround->getPlayer()]->getTotalPoints()) . " poäng.";
        $gameOver = true;
    }

    if (($gameOver == false) && ($dicegame->gameround->getPlayer() == 1)) {
        if ($dicegame->gameround->getRoundPoints() == 0) {
            echo "Du förlorade omgången.<br>";
        } else {
            echo "<input type='submit' name='continueRound' value='Fortsätt och kasta tärningarna på nytt'>";
        }
        echo "<input type='submit' name='nextPlayer' value='Nästa spelare'>";
    }

    if (($gameOver == false) && ($dicegame->gameround->getPlayer() == 0)) {
        $computerChoice = -1;
        if ($dicegame->gameround->getRoundPoints() == 0) {
            echo "Neumann förlorade omgången.<br>";
            $computerChoice = 0;
        } else {
            $computerChoice = rand(0, 1);
        }
        if ($computerChoice == 0) {
            echo "Neumann fortsätter inte!<br>";
            echo "<input type='submit' name='nextPlayer' value='Nästa spelare'>";
        } else {
            echo "Neumann vill fortsätta!<br>";
            echo "<input type='submit' name='continueRound' value='Låt datorn fortsätta'>";
        }
    }
}

?>

</form>
