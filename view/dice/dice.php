<?php

namespace Anax\View;

/**
 * Template file to render a view.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

?>

<h1><?= $title ?></h1>
IN PROGRESS...
<p>Välkommen att spela Tärningsspel 100 mot datorn, som går under sin gammelfarfars namn Neumann. Den som först når 100 poäng vinner.</p>

<h4>Ställningen i spelet just nu</h4>

<form method="POST">
    <input type="hidden" name="roundNumber" value="1">
    <input type="submit" name="continue" value="Fortsätt">
    <input type="submit" name="quit" value="Avsluta">
</form>

<?

for ($i = 0; $i < sizeof($players); $i++) {
    echo $players[$i]->getName() . " har " . $players[$i]->getTotalPoints() .  " poäng och första kast " . $players[$i]->getStartingNumber() . ".<br>";
}
