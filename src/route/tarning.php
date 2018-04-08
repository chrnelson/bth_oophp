<?php
/**
 * Guess game specific routes.
 */
//var_dump(array_keys(get_defined_vars()));

$app->router->any(["GET", "POST"], "tarning", function () use ($app) {
    $data = [
        "title" => "Tärningsspel 100",
    ];

    //initiate game
    $game = new \chrnelson\Dice\DiceGame();

    $players = $game->getPlayers();

    // Prepare $data
    $data["players"] = $players;

    $app->view->add("dice/dice", $data);
    $app->page->render($data);
});

/**
 * Guess my number with SESSION.
 */
$app->router->any(["GET", "POST"], "gissa/session", function () use ($app) {
    $data = [
        "title" => "Gissa mitt nummer (SESSION)",
    ];

    // Get incoming
    $guess = isset($_POST["guess"]) ? $_POST["guess"] : null;
    //$number = $_POST["number"]   ?? -1;
    //$tries  = $_POST["tries"]    ?? 6;
    //$guess  = $_POST["guess"]    ?? null;

    // Start up the game
    session_name("numbergame");
    session_start();
    if (!isset($_SESSION["game"])) {
        $_SESSION["game"] = new \chrnelson\Guess\Guess(-1, 6);
    }

    $game = $_SESSION['game'];

    //$game = new Guess($session->get("number", -1), $sessionen->get("tries", 6));

    // Reset the game
    if (isset($_GET["reset"])) {
        session_destroy();
        session_start();
        $_SESSION["game"] = new \chrnelson\Guess\Guess(-1, 6);
        $game->random();
    }

    // Do a guess
    $res = null;
    if (isset($_POST["doGuess"])) {
        $res = $game->makeGuess($guess);
    }

    // Prepare $data
    $data["game"] = $game;
    $data["res"] = $res;
    $data["guess"] = $guess;

    // Add view and render page
    $app->view->add("guess/session", $data);
    $app->page->render($data);
});
