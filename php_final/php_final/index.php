<?php
require_once('./bdd/bdd_user.php');
?>

<!DOCTYPE html>
</html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/css.css">
    <title>Classement</title>
</head>
<body>
<ul class="nav">
    <li><a href="index.php">Classements</a></li>
    <li><a href="ajouter.php">Ajouter joueurs</a></li>
    <li><a href="partie.php">Ajouter parties</a></li>
</ul>
<h1 style="font-family:Helvetica, sans-serif">Classement</h1>
<div id="flex">
<pre class="name"><?php for ($i = 0; $i < count($shows); $i++) {
        print  $shows[$i]['name'] . " nombre de matchs gagnés : " . $shows[$i]['win'] . " avec un ratio de " . number_format($shows[$i]['win']/$shows[$i]['nb_matchs'],2) . "\n";
    }
    ?>
</pre>
</div>
</body>
</html>