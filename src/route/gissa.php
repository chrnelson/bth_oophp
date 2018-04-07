<?php
/**
 * Guess game specific routes.
 */
//var_dump(array_keys(get_defined_vars()));



/**
 * Guess my number with GET.
 */
$app->router->get("gissa/get", function () use ($app) {
    $data = [
        "title" => "Gissa mitt nummer (GET)",
    ];

    // Get incoming
    $number = $_GET["number"]   ?? -1;
    $tries  = $_GET["tries"]    ?? 6;
    $guess  = $_GET["guess"]    ?? null;

    // Start up the game
    $game = new \chrnelson\Guess\Guess($number, $tries);

    // Reset the game
    if (isset($_GET["reset"])) {
        $game->random();
    }

    // Do a guess
    $res = null;
    if (isset($_GET["doGuess"])) {
        $res = $game->makeGuess($guess);
    }

    // Prepare $datta
    $data["game"] = $game;
    $data["res"] = $res;
    $data["guess"] = $guess;

    // Add view and render page
    $app->view->add("guess/get", $data);
    $app->page->render($data);
});

/**
 * Guess my number with POST.
 */
$app->router->any(["GET", "POST"], "gissa/post", function () use ($app) {
    $data = [
        "title" => "Gissa mitt nummer (POST)",
    ];

    // Get incoming
    $number = $_POST["number"]   ?? -1;
    $tries  = $_POST["tries"]    ?? 6;
    $guess  = $_POST["guess"]    ?? null;

    // Start up the game
    $game = new \chrnelson\Guess\Guess($number, $tries);

    // Reset the game
    if (isset($_POST["reset"])) {
        $game->random();
    }

    // Do a guess
    $res = null;
    if (isset($_POST["doGuess"])) {
        $res = $game->makeGuess($guess);
    }

    // Prepare $datta
    $data["game"] = $game;
    $data["res"] = $res;
    $data["guess"] = $guess;

    // Add view and render page
    $app->view->add("guess/post", $data);
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

    // Prepare $datta
    $data["game"] = $game;
    $data["res"] = $res;
    $data["guess"] = $guess;

    // Add view and render page
    $app->view->add("guess/session", $data);
    $app->page->render($data);
});
