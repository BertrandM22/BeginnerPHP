<?php
declare(strict_types=1);
// Ce fichier est votre point de départ (= puisque c'est l'index)
// Il contiendra la plupart de la logique, pour éviter de faire un mélange désordonné dans le html

// Cette ligne fait en sorte que PHP se comporte de manière plus stricte


// Nous allons utiliser des variables de session, nous devons donc activer les sessions
session_start();

// Utilisez cette fonction lorsque vous avez besoin d'un aperçu de ces variables
function whatIsHappening()
{
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
    ["name" => "Knacky-ball", "price" => 3.8],
    ["name" => "Chuck norris", "price" => 777],
    ["name" => "Kit peinture", "price" => 18.5],
    ["name" => "Cours PHP avec basile", "price" => 1000],
    ["name" => "Chaine Hi-Fi", "price" => 16.8]
];

$_SESSION["totalValue"] = 0;

function validate()
{
    $errors = [];

    // CHECK FOR EMPTY FIELDS
    if (empty($_POST['email'])) {
        $errors["email"] = "Your email address is required!";
    }
    if (empty($_POST['street'])) {
        $errors["street"] = "You must mention a street name!";
    }
    if (empty($_POST['streetnumber'])) {
        $errors["streetnumber"] = "A street number must be given!";
    }
    if (empty($_POST['city'])) {
        $errors["city"] = "City is required";
    }
    if (empty($_POST['zipcode'])) {
        $errors["zipcode"] = "Zipcode is required";
    }
    if(empty($_POST["products"])) {
        $errors["products"] = "You must select at least 1 product";
    }

    // CHECK FOR OTHER RULES
    if (!empty($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    }
    // Other validations...

    return $errors;
}

function handleForm()
{
    global $products;

    $invalidFields = validate();

    if (!empty($invalidFields)) {
        // update session to contain error messages

        require 'form-view.php';
        exit; // stop the function from continuing
    } else {
        $_SESSION["totalValue"] = 0;
        foreach ($_POST["products"] as $i => $product) {
            $_SESSION["totalValue"] += $products[$i]["price"];
        }
        $successMessage = "Merci pour votre commande! " . $_POST["street"] . " numéro " . $_POST["streetnumber"] . " à " . $_POST["zipcode"] . " " . "," . " " . $_POST["city"];
        // TODO: gérer la soumission réussie
        require_once 'form-view.php';
    }
}

// TODO: remplacer ce if par une vérification réelle de la soumission du formulaire

if (!empty($_POST)) {
    handleForm();
} else {
    require 'form-view.php';
}