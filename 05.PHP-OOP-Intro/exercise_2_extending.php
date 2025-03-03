<?php

declare(strict_types=1);

/* EXERCICE 2

TODO: Créez une classe bière qui hérite de Boisson.
TODO: Créez les propriétés nom (string) et pourcentageAlcool (float).
TODO: Prévoyez un constructeur qui nous permet d'utiliser toutes les propriétés de boisson et qui définit les valeurs pour nom et pourcentageAlcool.

Rappelez-vous que pour l'instant nous utiliserons des propriétés et des méthodes accessibles de partout.
TODO: Créez une fonction getPourcentageAlcool qui retourne le pourcentageAlcool.
TODO: Instanciez un objet qui représente Duvel. Assurez-vous que la couleur soit définie à blond, le prix à 3,5 euros et la température à froid automatiquement.
TODO: Assurez-vous également que le nom soit égal à Duvel et le pourcentage d'alcool à 8,5%.
TODO: Imprimez le getPourcentageAlcool 2 fois à l'écran de deux manières différentes, imprimez la couleur à l'écran et le getInfo.

Assurez-vous que chaque impression soit sur une ligne différente.
Essayez d'obtenir cette erreur à l'écran = Erreur fatale : Erreur non interceptée : Appel à une méthode non définie Boisson::getPourcentageAlcool() dans /var/www/becode/workshop/exercise2.php à la ligne 64
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
    $carapils = new biere( "carapils", 5.5, "blond", 2.5);
    $duvel = new biere("Duvel", 8.5, "blanche", 3.5 );
 
     $coca= new Boisson("noir", 2);
     $fanta= new Boisson("orange",1.5);
     $chocolatChaud = new Boisson("chocolat", 8, "chaud");



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