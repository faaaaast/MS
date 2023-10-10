
<?php
session_start();


// Inclure le fichier de connexion à la base de données
require_once 'db_connexion.php';




// Fonction pour récupérer les plats par catégorie
function getPlatsParCategorie($db, $categorie_id) {
    $requete_plats = $db->prepare("SELECT * FROM plat WHERE id_categorie = :categorie_id AND active = 'Yes'");
        $requete_plats->bindParam(':categorie_id', $categorie_id);
    $requete_plats->execute();
    return $requete_plats->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plats par Catégorie</title>
    <!-- Ajouter les liens CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        /* Ajouter une classe CSS pour limiter la taille des images */
        .card-img-top {
            max-width: 100%;
            height: auto;
        }

        body {
          background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/img/banniere5.jpg') center center fixed no-repeat;
	        background-size: cover;
        	height: 1200px;
        }
        h6{
          color: white;
        }

        /* Fond de la nav bar */
.fondcouleurnav {
  background-color: beige;
  border-radius: 15px;
}
    </style>
</head>
<body>
<header class="fixed-top">
      <!-- Début de la div de la nav bar du haut -->
      <nav class="fondcouleurnav navbar navbar-expand-lg bg-beige justify-content-center text-center">
    <img class="logo" src="/img/images_the_district/the_district_brand/logo.png" alt="logo" style="height: 100px; width: 100px;">

    <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
        <a class="navbar-brand mx-5 hover-scale" aria-current="page" href="/HTML/index.php">Accueil</a>
        <a class="navbar-brand mx-5 hover-scale" aria-current="page" href="/HTML/categorie.php">Catégorie</a>
        <a class="navbar-brand mx-5 hover-scale" href="/HTML/plats.php">Plats</a>
        <a class="navbar-brand mx-5 hover-scale" href="/HTML/contact.php">Contact</a>
        <a class="navbar-brand mx-5 hover-scale" href="/HTML/commande.php">Commandes</a>
    </div>
    <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
        <a href="panier.php"><i class="fa-sharp fa-solid fa-basket-shopping fa-xl zoom"> </i></a>
    </div>
</nav>
    
    <!-- Fin de la div de la nav bar du haut -->
</header>
<div class="container mt-5">

    <!-- Boucle pour afficher les plats par catégorie -->
    <?php
    // Récupérer les catégories
    $requete_categories = $db->prepare("SELECT * FROM categorie WHERE active = 'Yes'");
    $requete_categories->execute();
    $categories = $requete_categories->fetchAll(PDO::FETCH_ASSOC);

    foreach ($categories as $categorie) {
        echo '<div class="mt-4">';
        echo '<h2 style="color: white;">' . $categorie['libelle'] . '</h2>';

        // Récupérer les plats par catégorie
        $plats = getPlatsParCategorie($db, $categorie['id']);

        // Afficher les plats
        echo '<div class="row">';
        foreach ($plats as $plat) {
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card h-100">';
            echo '<img src="' . $plat['image'] . '" class="card-img-top" alt="Image Plat">';
            echo '<div class="card-body">';
            echo '<h6 class="card-subtitle mb-2 text-muted">' . $categorie['libelle'] . '</h6>';
            echo '<h5 class="card-title">' . $plat['libelle'] . '</h5>';
            echo '<p class="card-text">' . $plat['description'] . '</p>';
            echo '<p class="card-text">Prix : $' . $plat['prix'] . '</p>';
            echo '<form action="panier.php" method="post">';
            echo '<input type="hidden" name="id_plat" value="' . $plat['id'] . '">';
            echo '<div class="form-group">';
            echo '<label for="quantite' . $plat['id'] . '">Quantité :</label>';
            echo '<input type="number" name="quantite" id="quantite' . $plat['id'] . '" class="form-control" min="0" value="0">';
            echo '</div>';
            echo '<button type="submit" class="btn btn-primary">Ajouter au panier</button>';                        
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>'; // Fin de la ligne
        echo '</div>'; // Fin de la catégorie
    }
    ?>
</div>

<!-- Ajouter les scripts Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



<br>
<div class="bg-white">
<br><br>
<br>
<div>
</body>
<footer>
    <nav class="fondcouleurnav navbar navbar-expand-lg bg-beige justify-content-center text-center">

        <!-- Début des réseaux sociaux -->
        <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
            <div class="couleur-navigation placers d-flex justify-content-center align-items-center flex-wrap">
                <a class="taillelogors my-3 mt-3 mx-3"><i class="fa-brands fa-instagram fa-bounce"
                        style="color: black;font-size:100px;"></i></a>
                <a class="taillelogors my-5 mx-3"><i class="fa-brands fa-pinterest fa-bounce"
                        style="color: black;font-size:100px;"></i></a>
                <a class="taillelogors my-5 mx-3"><i class="fa-brands fa-twitter fa-bounce"
                        style="color: black;font-size:100px;"></i></a>
                <a class="taillelogors my-5 mx-3"><i class="fa-brands fa-linkedin fa-bounce"
                        style="color: black;font-size:100px;"></i></a>
                <a class="taillelogors my-5 mx-3"><i class="fa-brands fa-facebook fa-bounce"
                        style="color: black;font-size:100px"></i></a>
                <a class="taillelogors my-5 mx-3"><i class="fa-brands fa-youtube fa-bounce"
                        style="color: black;font-size:100px"></i></a>
            </div>
        </div>
        <!-- Fin des réseaux sociaux -->
    </nav>
</footer>
</html>