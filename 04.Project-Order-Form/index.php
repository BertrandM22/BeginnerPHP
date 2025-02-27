<?php

// Ce fichier est votre point de départ (= puisque c'est l'index)
// Il contiendra la plupart de la logique, pour éviter de faire un mélange désordonné dans le html

// Cette ligne fait en sorte que PHP se comporte de manière plus stricte
declare(strict_types=1);

// Nous allons utiliser des variables de session, nous devons donc activer les sessions
session_start();

// Utilisez cette fonction lorsque vous avez besoin d'un aperçu de ces variables
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

// TODO: fournir quelques produits (vous pouvez remplacer l'exemple)
$products = [
    ['name' => 'Eau', 'price' => 2.5],
    ["name"=> "Knacky-ball","price" => 3.8],
    ["name"=> "Chuck norris", "price" => 777],
    ["name"=> "Kit peinture", "price" => 18.5],
    ["name"=> "Cours PHP avec basile", "price"=> 1000],
    ["name"=> "Chaine Hi-Fi", "price" => 16.8]
];

$totalValue = 0;


function produits($products){
    global $totalValue, $supertotal;
 if (isset($_POST['products'])&& !empty($_POST['products'])) {
    foreach ($_POST['products'] as $i => $product) {
       $supertotal= $totalValue += $products[$i]['price'];
       

    }}}
$errorCity = "";
$errorEmail = "";
$errorName = "";
$errorStreet = "";
$errorStreetNumber = "";
$errorZipcode = ""; 
$formSubmitted = true;
$formOk = "";
function validate()
{
    global $errorEmail, $errorName, $errorStreet, $errorStreetNumber, $errorCity, $errorZipcode, $formSubmitted, $formOk;	
    if (empty($_POST['name'])) {
        $errorName = "Name is required";
        $formSubmitted = false;
        
    }
    if (empty($_POST['email'])) {
        
        $errorEmail = "Email is required";
        $formSubmitted = false;
    }
    if (empty($_POST['street'])) {
        $errorStreet = "street is required";
        $formSubmitted = false;
        
    }
    if (empty($_POST['streetnumber'])) {
        $errorStreetNumber = "streetnumber is required";
        $formSubmitted = false;
    }
    if (empty($_POST['city'])) {
        $errorCity = "city is required";
        $formSubmitted = false;
    }
    if (empty($_POST['zipcode'])) {
        $errorZipcode = "zipcode is required";
        $formSubmitted = false;
    }else {
    $formSubmitted = true;
    var_dump($formSubmitted);
        $formOk= 'toute les information de livraison ont été enregistrer:';
    }

    // TODO: Cette fonction renverra une liste de champs invalides
    return [];
}
$userCity="";
$userEmail="";
$userStreet="";
$userStreetNumber="";
$userZipCode="";

 function handleForm()

    {
        global  $userCity, $userEmail, $userStreet, $userStreetNumber, $userZipCode, $formSubmitted, $formOk;
   
        $userCity=$_POST['city'];
        $userEmail=$_POST['email'];
        $userStreet=$_POST['street'];
        $userStreetNumber=$_POST['streetnumber'];
        $userZipCode=$_POST['zipcode'];

        // TODO: tâches liées au formulaire (étape 1)

        // Validation (étape 2)
    
        if (!empty($invalidFields)) {
            // TODO: gérer les erreurs
        
        } else {
            // TODO: gérer la soumission réussie
        }
    }

// TODO: remplacer ce if par une vérification réelle de la soumission du formulaire

$msg="";

if (isset($_POST['buttonSub'])&& !empty($_POST['products'])) {

   validate();
   
   handleForm();
   
   if($formSubmitted== true){
    
    $supertotal= produits($products);
   
   
     $msg="Votre commande a été envoyée";
    }else {
        $supertotal=0;
        $msg= "il manque des champs requis pour valider la commande";
    }
   
}


require 'form-view.php';