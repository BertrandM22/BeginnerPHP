<?php // Ce fichier contient principalement des éléments pour votre vue / html ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>Votre magasin élégant</title>
</head>
<body>
<div class="container">
    <h1>Passez votre commande</h1>
    <?php // Navigation pour quand vous en avez besoin ?>
    <?php /*
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="?food=1">Commander de la nourriture</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?food=0">Commander des boissons</a>
            </li>
        </ul>
    </nav>
    */ ?>
    <form method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail :</label>
                <h5> <?php echo $errorEmail ?> </h5>
                <input type="email" id="email" name="email" class="form-control"/>
            </div>
            
           
            <div></div>
        </div>

        <fieldset>
            <legend>Adresse</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street">Rue :</label>
                    <h5> <?php echo $errorStreet ?> </h5>
                    <input type="text" name="street" id="street" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="streetnumber">Numéro de rue :</label>
                    <h5> <?php echo $errorStreetNumber ?> </h5>
                    <input type="text" id="streetnumber" name="streetnumber" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Ville :</label>
                    <h5> <?php echo $errorCity ?> </h5>
                    <input type="text" id="city" name="city" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Code postal :</label>
                    <h5> <?php echo $errorZipcode ?> </h5>
                    <input type="text" id="zipcode" name="zipcode" class="form-control">
                </div>
                <h5><?php echo $formOk . " " . $userStreet . " numéro " . $userStreetNumber . " à " . $userZipCode . " ".","." " . $userCity; ?></h5>
            </div>
        </fieldset>

        <fieldset>
            <legend>Produits</legend>
            <?php foreach ($products as $i => $product): ?>
                <label>
                    <?php // <?= est équivalent à <?php echo ?>
                    <input type="checkbox" value="1" name="products[<?php echo $i ?>]"/> <?php echo $product['name'] ?> -
                    &euro; <?= number_format($product['price'], 2) ?></label><br />
            <?php endforeach; ?>
        </fieldset>

        <button type="submit" name="buttonSub" class="btn btn-primary">Commander !</button>
    </form>
    <h4><?php echo $msg; ?></h4>
    <footer>Vous avez déjà commandé pour <strong>&euro; <?php echo $totalValue ?></strong> en article, merci de votre fidèlité.</footer>

    
</div>

<style>
    footer {
        text-align: center;
    }
</style>
</body>
</html>
