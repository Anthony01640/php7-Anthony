<?php
require_once($projectDirectory.'/fonction/array.php');


function insultron() {
    global $projectDirectory;

    $adjectives1 = arrayRand(require($projectDirectory.'/compliment/adjctives.php'));
    $adjectives2 = arrayRand(require($projectDirectory.'/compliment/adjctives.php'));
    $animal = arrayRand(require($projectDirectory.'/compliment/animals.php'));
    $emoji = arrayRand(require($projectDirectory.'/compliment/emojis.php'));
    return sprintf(
        "Tu es %s comme un %s %s ! %s\n",
        $adjectives1,
        $adjectives2,
        $animal,
        $emoji
    );
}
