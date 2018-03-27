<?php
/**
 *
 */
class Maison
{

    protected $adresse;
    protected $pieces;
    protected $prix;
    public $personne;


    public function __construct(string $adresse, int $pieces, int $prix, int $personne)
    {
        $this->adresse = $adresse;
        $this->pieces = $pieces;
        $this->prix = $prix;
        $this->personne = $personne;
    }

    public function nb_persones(int $chambre)
    {
        if ($chambre > $personne){
            print("La maison est assez grande pour votre famille");
        }else {
            print("Il faut trouver une maison plus grande");
        }
    }
}

$maison_1 = new Maison("16 grande rue", 4, 88000, 15);
$maison_1->nb_persones(3);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <<?php var_dump($maison_1) ?>
    </body>
</html>
