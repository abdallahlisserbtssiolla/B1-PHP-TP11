<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>SanayaBio</title>
    <link rel="stylesheet" href="styles/sanayabio.css">

</head>

<body>

    <?php

    $intitulesProduits = array(
        "Pipette Compte-Goutte",
        "Capsule aluminium 20/410",
        "Capsule service 20/410",
        "Bandelettes PH - Boîte de 50",
        "Spatule Inox"
    );

    ?>

    <h1>Produits en promotion</h1>

    <ol>
        <?php
        foreach ($intitulesProduits as $produit) {
            echo "<li>$produit</li>";
        }
        ?>
    </ol>
<a href="./index.html">Retour à la page d'accueil</a>

</body>

</html>
