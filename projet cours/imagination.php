<?php
if (isset($argv[1]) && is_numeric($argv[1]) && $argv[1]<=100 && $argv[1]>0) {
    $choix = (float)$argv[1];
} else{
        die("Valeur invalide");
}
$valeur = rand(1,100);
if ($argv[1]>$valeur) {
    print "Gagné ! \n";
    print "Vous remportez : " .($choix+(100-$argv[1])) . " euros au total";
}
elseif ($argv[1]==$valeur) {
    print "Egalité ! \n";
    print "Vous repartez avec votre mise de " . $choix . " euros";
}
else {
    print "Perdu ! \n";
    print "Vous perdez : " .($argv[1]) . " euros";
}
