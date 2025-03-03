<?php 

$tva6 = 0.06;
$tva21 = 0.21;

$banane="Banane";
$pomme="Pomme";
$btlVin="Bouteille de vin";

$bananePrice=1;
$pommePrice=1.5;
$btlVinPrice=10;

$bananeNumber= 3;
$pommeNumber= 2;
$btlVinNumber= 4;
 $boisson = new boisson($banane, $pomme, $btlVin, $bananePrice, $pommePrice, $btlVinPrice, $bananeNumber, $pommeNumber, $btlVinNumber , $tva6, $tva21);
class boisson {
    public $tva6;
    public $tva21;
    public $banane;
    public $pomme;
    public $btlVin;
    public $bananePrice;
    public $pommePrice;
    public $btlVinPrice;
    public $bananeNumber;
    public $pommeNumber;
    public $btlVinNumber;
    public function __construct($banane, $pomme, $btlVin, $bananePrice, $pommePrice, $btlVinPrice, $bananeNumber, $pommeNumber, $btlVinNumber , $tva6, $tva21) {
        $this->tva6 = $tva6;
        $this->tva21 = $tva21;
        $this->banane = $banane;
        $this->pomme = $pomme;
        $this->btlVin = $btlVin;
        $this->bananePrice = $bananePrice;
        $this->pommePrice = $pommePrice;
        $this->btlVinPrice = $btlVinPrice;
        $this->bananeNumber = $bananeNumber;
        $this->pommeNumber = $pommeNumber;
        $this->btlVinNumber = $btlVinNumber;
    }
 
    
   public function getInfo(): string {
    $totalBanane = $this->bananePrice * $this->bananeNumber;
    $totalPomme = $this->pommePrice * $this->pommeNumber;
    $totalVin = $this->btlVinPrice * $this->btlVinNumber;

    $tvaBanane = $totalBanane * $this->tva6;
    $tvaPomme = $totalPomme * $this->tva6;
    $tvaVin = $totalVin * $this->tva21;

    $totalBananeTTC = $totalBanane + $tvaBanane;
    $totalPommeTTC = $totalPomme + $tvaPomme;
    $totalVinTTC = $totalVin + $tvaVin;

    $info = "Le prix de  $this->banane est $this->bananePrice € et le total de $this->bananeNumber $this->banane est de $totalBanane € HTVA et avec TVA  $totalBananeTTC €<br>";
    $info .= "Le prix de  $this->pomme est $this->pommePrice € et le total de $this->pommeNumber $this->pomme est de  $totalPomme € HTVA et avec TVA  $totalPommeTTC €<br>";
    $info .= "Le prix de  $this->btlVin est $this->btlVinPrice € et le total de $this->btlVinNumber $this->btlVin est de  $totalVin € HTVA et avec TVA $totalVinTTC €<br>";
return $info;
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
    <?php 
echo "Le  prix de une $banane est $bananePrice € et le total de $bananeNumber  $banane est de   = " . $bananePrice * $bananeNumber . "€";
echo "<br>";
echo "Le prix de une $pomme  est $pommePrice € et le  total  de $pommeNumber $pomme est de    = " . $pommePrice * $pommeNumber . "€";
echo "<br>";
echo "Le prix de une $btlVin est $btlVinPrice € et le total de $btlVinNumber $btlVin est de   = " . $btlVinPrice * $btlVinNumber . "€";
echo "<br>";
echo $boisson->getInfo();


?>
</body>
</html>