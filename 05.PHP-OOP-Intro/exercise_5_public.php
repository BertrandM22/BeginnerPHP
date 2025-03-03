<?php

declare(strict_types=1);

/* EXERCISE 5

Copiez la classe de l'exercice 1.

TODO: Changez les propriétés en privé.
TODO: Corrigez les erreurs sans utiliser de fonctions getter et setter.
TODO: Changez le prix à 3,5 euros et affichez-le également à l'écran sur une nouvelle ligne.
*/


class Boisson{
private $couleur;
private $prix;  
private $temperature;

 public function __construct( string $couleur, float $prix, string $temperature="froide"){
    $this -> couleur = $couleur;
    $this ->prix = $prix;
    $this -> temperature= $temperature;
 }
 public function getInfo(): string{
    return " la boisson est $this->temperature et de couleur $this->couleur au prix de $this->prix €";
 }
 public function newPrice(float $newPrice){
    $this->prix = $newPrice;
}
}

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
    <?php echo $fanta->getInfo()?>
    <br>
    <?php echo $coca->newPrice(3.5)?>
    <br>
    <?php echo $coca->getInfo()?>
</body>
</html>