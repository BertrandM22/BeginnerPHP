<?php

declare(strict_types=1);
/* EXERCICE 1
TODO: Créez une classe boisson.
TODO: Créez les propriétés couleur (string), prix (float) et température (string) et prévoyez également un constructeur.
TODO: Ayez une valeur par défaut "froide" dans le constructeur pour la température.

Rappelez-vous que pour l'instant, nous utiliserons des propriétés et des méthodes accessibles de partout.
TODO: Faites une fonction getInfo qui retourne "Cette boisson est <température> et <couleur>."
TODO: Instanciez un objet qui représente du cola. Assurez-vous que la couleur soit définie sur noir, que le prix soit de 2 euros et que la température soit automatiquement froide.
 Imprimez le getInfo à l'écran.
TODO: Imprimez la température à l'écran.

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
</body>
</html>