<?php

declare(strict_types=1);

/* EXERCICE 3

TODO: Copiez le code de l'exercice 2 ici et supprimez tout ce qui est lié au cola.
TODO: Rendez toutes les propriétés privées.
TODO: Faites en sorte que toutes les autres impressions fonctionnent sans erreur.
TODO: Après avoir corrigé les erreurs, changez la couleur de Duvel en clair au lieu de blond et imprimez également cette nouvelle couleur à l'écran après toutes les autres choses qui ont déjà été imprimées (pour être sûr que la couleur a changé).
TODO: Créez une nouvelle méthode privée dans la classe Beer appelée beerInfo qui renvoie "Salut, je suis Duvel et j'ai un pourcentage d'alcool de 8,5 et j'ai une couleur claire."

Assurez-vous d'utiliser les variables et pas seulement cette ligne de texte.

TODO: Imprimez cette méthode à l'écran sur une nouvelle ligne.

UTILISEZ LE TYPEHINTING PARTOUT !
*/
class  Boisson{
    protected $couleur;
    protected $prix;  
    protected $temperature;
 
     public function __construct( string $couleur, float $prix, string $temperature="froide"){
        $this -> couleur = $couleur;
        $this ->prix = $prix;
        $this -> temperature= $temperature;
      
     }
     public function getInfo(): string{
        return " la boisson est $this->temperature et de couleur $this->couleur au prix de $this->prix €";
     }
    
    public function couleur(string $couleurDiff) {
        $this->couleur = $couleurDiff;
    }
}
     
     class biere extends Boisson{
        private $nom;
        private $pourcentageAlcool;
        public function __construct(string $nom, float $pourcentageAlcool, string $couleur, float $prix, string $temperature="froide"){
            $this -> nom = $nom;
            $this -> pourcentageAlcool = $pourcentageAlcool;
             parent::   __construct($couleur, $prix, $temperature);
        }
        public function getPourcentageAlcool(): STRING{
            return  " la $this->nom est $this->temperature et de couleur $this->couleur au prix de $this->prix € et a $this->pourcentageAlcool% de taux d'alcool";
        }
    }
    $carapils = new biere( "carapils", 5.5, "blond", 2.5);
    $duvel = new biere("Duvel", 8.5, "blonde", 3.5 );
 
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
    <br>    
    <?php $duvel->couleur("clair")?>
    <?php echo $duvel->getPourcentageAlcool("blanche")?>

</body>
</html>