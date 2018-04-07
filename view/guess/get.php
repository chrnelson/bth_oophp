<?php

namespace Anax\View;

/**
 * Template file to render a view.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

?>

<h1><?= $title ?></h1>

<p>Gissa på ett tal mellan 1 och 100. Du har <?= $game->tries() ?> försök kvar.</p>

<form method="GET">
    <input type="hidden" name="number" value="<?= $game->number() ?>">
    <input type="hidden" name="tries" value="<?= $game->tries() ?>">
    <input type="text" name="guess" value="<?= $guess ?>" autofocus>
    <?= ($game->tries() > 0) ? '<input type="submit" name="doGuess" value="Gissa">' : ''; ?>
    <input type="submit" name="doCheat" value="Fuska">
</form>

<p>
    <a href="?reset">Nollställ spelet</a>
</p>

<?php if (isset($res)) : ?>
<p>Din gissning <?= $guess ?> är <b><?= $res ?></b></p>
<?php endif; ?>

<?php if (isset($_GET["doCheat"])) : ?>
<p>Fusk: <?= $game->number() ?></p>
<?php endif; ?>
