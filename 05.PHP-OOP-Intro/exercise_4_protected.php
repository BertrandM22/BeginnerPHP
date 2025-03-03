<?php

declare(strict_types=1);

/* EXERCICE 4

Copiez le code de l'exercice 2 ici et supprimez tout ce qui est lié au cola.

TODO: Rendez toutes les propriétés protégées.
TODO: Faites en sorte que toutes les autres impressions fonctionnent sans erreur sans changer la classe Boisson.

UTILISEZ LE TYPEHINTING PARTOUT !
*/




class Boisson{
    public $couleur;
    public $prix;  
    public $temperature;
 
     public function __construct( string $couleur, float $prix, string $temperature="froide"){
        $this -> couleur = $couleur;
        $this ->prix = $prix;
        $this -> temperature= $temperature;
      
     }
     public function getInfo(): string{
        return " la boisson est $this->temperature et de couleur $this->couleur au prix de $this->prix €";
     }}
     $carapils = new biere( "carapils", 5.5, "blond", 2.5);
    $duvel = new biere("Duvel", 8.5, "blanche", 3.5 );
 
     $coca= new Boisson("noir", 2);
     $fanta= new Boisson("orange",1.5);
     $chocolatChaud = new Boisson("chocolat", 8, "chaud");
     
     class biere extends Boisson{
        public $nom;
        public $pourcentageAlcool;
        public function __construct(string $nom, float $pourcentageAlcool, string $couleur, float $prix, string $temperature="froide"){
            $this -> nom = $nom;
            $this -> pourcentageAlcool = $pourcentageAlcool;
            parent::__construct($couleur, $prix, $temperature);
            
        }
        public function getPourcentageAlcool(): STRING{
            
            return  " la $this->nom est $this->temperature et de couleur $this->couleur au prix de $this->prix € et a $this->pourcentageAlcool% de taux d'alcool";
        }
    }
    



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $chocolatChaud->getInfo()?>
    <br>
    <?php echo $coca->getInfo()?>
    <br>
    <?php echo $duvel->getPourcentageAlcool()?>
    <br>
    

    <?php echo $carapils->getPourcentageAlcool()?>
</body>
</html>