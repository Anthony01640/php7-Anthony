<?php
function getSerie()
{
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    $slug='toto';
    if (isset($_GET['slug'])) {
        $slug = $_GET['slug'];
    }
$selectedShow=$shows[$slug];
return $selectedShow;
}
 ?>
