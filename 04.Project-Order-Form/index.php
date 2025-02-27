<?php

// Ce fichier est votre point de départ (= puisque c'est l'index)
// Il contiendra la plupart de la logique, pour éviter de faire un mélange désordonné dans le html

// Cette ligne fait en sorte que PHP se comporte de manière plus stricte
declare(strict_types=1);

// Nous allons utiliser des variables de session, nous devons donc activer les sessions
session_start();
$_SESSION["errorCity" ]= "";
$_SESSION["errorEmail" ]= "";
$_SESSION["errorName"]= "";
$_SESSION["errorStreet" ]= "";
$_SESSION["errorStreetNumber" ]= "";
$_SESSION["errorZipcode "]= "";
$_SESSION["formSubmitted" ]= true;
$_SESSION["formOk" ]= "";
$_SESSION["userCity" ]= "";
$_SESSION["userEmail" ]= "";
$_SESSION["userStreet" ]= "";
$_SESSION["userStreetNumber" ]= "";
$_SESSION["userZipCode "]= "";
$_SESSION["supertotal" ]= 0;
$_SESSION["msg" ]= "";

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

$_SESSION["totalValue"] = 0;


function produits($products){
    global $totalValue, $supertotal;
 if (isset($_POST['products'])&& !empty($_POST['products'])) {
    foreach ($_POST['products'] as $i => $product) {
       $_SESSION["supertotal"]= $_SESSION["totalValue"] += $products[$i]['price'];
       

    }}}

function validate()
{
    $_SESSION["errorName"] = "";
    $_SESSION["errorEmail"] = "";
    $_SESSION["errorStreet"] = "";
    $_SESSION["errorStreetNumber"] = "";
    $_SESSION["errorCity"] = "";
    $_SESSION["errorZipcode"] = "";
    $_SESSION["formSubmitted"] = true;
    
    if (empty($_POST['name'])) {
        $_SESSION["errorName"] = "Name is required";
        $_SESSION["formSubmitted"] = false;
        
    }
    if (empty($_POST['email'])) {
        
        $_SESSION["errorEmail"] = "Email is required";
        $_SESSION["formSubmitted"] = false;
    }
    if (empty($_POST['street'])) {
        $_SESSION["errorStreet"] = "street is required";
        $_SESSION["formSubmitted"] = false;
        
    }
    if (empty($_POST['streetnumber'])) {
        $_SESSION["errorStreetNumber"] = "streetnumber is required";
        $_SESSION["formSubmitted"] = false;
    }
    if (empty($_POST['city'])) {
        $_SESSION["errorCity"] = "city is required";
        $_SESSION["formSubmitted"] = false;
    }
    if (empty($_POST['zipcode'])) {
        $_SESSION["errorZipcode"] = "zipcode is required";
        $_SESSION["formSubmitted"] = false;
    }else {
        $_SESSION["formSubmitted"] = true;
   
    $_SESSION["formOk"]= 'toute les information de livraison ont été enregistrer:';
    }

    // TODO: Cette fonction renverra une liste de champs invalides
    return [];
}


 function handleForm()

    {
       
   
        $_SESSION["userCity"]=$_POST['city'];
        $_SESSION["userEmail"]=$_POST['email'];
        $_SESSION["userStreet"]=$_POST['street'];
        $_SESSION["userStreetNumber"]=$_POST['streetnumber'];
        $_SESSION["userZipCode"]=$_POST['zipcode']; 

        // TODO: tâches liées au formulaire (étape 1)

        // Validation (étape 2)
    
        if (!empty($invalidFields)) {
            // TODO: gérer les erreurs
        
        } else {
            // TODO: gérer la soumission réussie
        }
    }

// TODO: remplacer ce if par une vérification réelle de la soumission du formulaire



if (isset($_POST['buttonSub'])&& !empty($_POST['products'])) {

   validate();
   
   handleForm();
   
   if($_SESSION['formSubmitted']== true){
    
    $_SESSION["supertotal"]= produits($products);
   
   
    $_SESSION["msg"]="Votre commande a été envoyée";
    }else {
        $_SESSION["supertotal"]=0;
        $_SESSION["msg"]= "il manque des champs requis pour valider la commande";
    }
   
}


require 'form-view.php';
?>