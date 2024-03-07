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
        array(
            "intitule" => "Pipette Compte-Goutte",
            "categorie" => "Accessoire",
            "prix" => 1
        ),
        array(
            "intitule" => "Capsule aluminium 20/410",
            "categorie" => "Flaconnage",
            "prix" => 0.2
        ),
        array(
            "intitule" => "Capsule service 20/410",
            "categorie" => "Flaconnage",
            "prix" => 0.25
        ),
        array(
            "intitule" => "Bandelettes PH - Boîte de 50",
            "categorie" => "Flaconnage",
            "prix" => 2.9
        ),
        array(
            "intitule" => "Spatule Inox",
            "categorie" => "Fabrication",
            "prix" => 1.9
        )
    );

    ?>

    <h1>Produits en promotion</h1>

    <table>
        <tr>
            <th>Libellé</th>
            <th>Catégorie</th>
            <th>Prix</th>
        </tr>
        <?php
        foreach ($produitsPromo as $produit) {
            $libelle = strtoupper($produit['intitule']);
            $categorie = $produit['categorie'];
            $prix = $produit['prix'];
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
