<?php
/**
 * Dice game specific routes.
 */
//var_dump(array_keys(get_defined_vars()));

$app->router->any(["GET", "POST"], "tarning", function () use ($app) {
    $data = [
        "title" => "Tärningsspel 100",
    ];

    // Set the session
    if (session_status() == PHP_SESSION_NONE) {
        session_name("dicegame");
        session_start();
    }

    //initiate game
    if (!isset($_SESSION["dicegame"])) {
        $_SESSION["dicegame"] = new \chrnelson\Dice\DiceGame();
    }

    if (isset($_POST["newRound"])) {
        header("Refresh:0");
        $game = $_SESSION["dicegame"];
        $game->gameround->startRound();
        $_SESSION["gameround"] = $game->gameround->getRoundNumber();
    }

    if (isset($_POST["continueRound"])) {
        header("Refresh:0");
        $game = $_SESSION["dicegame"];
        $game->gameround->continueRound();
        $_SESSION["gameround"] = $game->gameround->getRoundNumber();
    }

    if (isset($_POST["nextPlayer"])) {
        $game = $_SESSION["dicegame"];
        $players = $_SESSION["players"];
        $players[$game->gameround->getPlayer()]->setTotalPoints($game->gameround->getRoundPoints());
        header("Refresh:0");
        if ($game->gameround->getPlayer() == 0) {
            $game->gameround->setPlayer(1);
        } else {
            $game->gameround->setPlayer(0);
        }

        $game->gameround->startRound();
        $_SESSION["gameround"] = $game->gameround->getRoundNumber();
    }

    // Reset the game
    if (isset($_POST["reset"])) {
        session_destroy();
        session_name("dicegame");
        session_start();
        $_SESSION["dicegame"] = new \chrnelson\Dice\DiceGame();
        header("Refresh:0");
    }

    $game = $_SESSION["dicegame"];
    $_SESSION["players"] = $game->getPlayers();
    $_SESSION["gameround"] = $game->gameround->getRoundNumber();

    // Prepare $data
    $data["dicegame"] = $_SESSION["dicegame"];
    $data["players"] = $_SESSION["players"];
    $data["gameround"] = $_SESSION["gameround"];

    $app->view->add("dice/dice", $data);
    $app->page->render($data);
});
