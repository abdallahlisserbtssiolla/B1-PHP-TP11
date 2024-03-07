<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>SanayaBio</title>
    <link rel="stylesheet" href="styles/sanayabio.css">

</head>

<body>

    <?php

    $intitules = array(
        "Pipette Compte-Goutte",
        "Capsule aluminium 20/410",
        "Capsule service 20/410",
        "Bandelettes PH - Boîte de 50",
        "Spatule Inox"
    );

    $categories = array(
        "Accessoire",
        "Flaconnage",
        "Flaconnage",
        "Fabrication",
        "Fabrication"
    );

    $prix = array(
        1,
        0.2,
        0.25,
        2.9,
        1.9
    );

    ?>

    <h1>Produits en promotion</h1>

    <table border="1">
        <tr>
            <th>Libellé</th>
            <th>Catégorie</th>
            <th>Prix</th>
        </tr>
        <?php
        for ($i = 0; $i < count($intitules); $i++) {
            echo "<tr>";
            echo "<td>" . strtoupper($intitules[$i]) . "</td>"; 
            echo "<td>" . strtoupper($categories[$i]) . "</td>";
            echo "<td>" . $prix[$i] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="./index.html">Retour à la page d'accueil</a>
</body>

</html>
