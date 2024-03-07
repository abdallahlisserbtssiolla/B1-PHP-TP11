<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>SanayaBio</title>
    <link rel="stylesheet" href="styles/sanayabio.css">

</head>

<body>

    <?php

    $produitsPromo = array(
        "Pipette Compte-Goutte:Accessoire:1",
        "Capsule aluminium 20/410:Flaconnage:0.2",
        "Capsule service 20/410:Flaconnage:0.25",
        "Bandelettes PH - Boîte de 50:Fabrication:2.9",
        "Spatule Inox:Fabrication:1.9"
    );

    ?>

    <h1>Produits en promotion</h1>

    <table border=1>
        <tr>
            <th>Libellé</th>
            <th>Catégorie</th>
            <th>Prix</th>
        </tr>
        <?php
        foreach ($produitsPromo as $produit) {
            $infos = explode(":", $produit);
            $libelle = strtoupper($infos[0]);
            $categorie = $infos[1];
            $prix = $infos[2];
            echo "<tr>
                    <td>$libelle</td>
                    <td>$categorie</td>
                    <td>$prix €</td>
                </tr>";
        }
        ?>
    </table>
    <a href="./index.html">Retour à la page d'accueil</a>

</body>

</html>
