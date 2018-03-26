<?php

$json = file_get_contents(__DIR__.'/data/shows.json');
$shows = json_decode($json, true);

$random = array_rand($shows);

header('Location: http://localhost/php7-Anthony/Projet_php_un/serie.php?slug=' . $shows[$random]['slug']);
?>
