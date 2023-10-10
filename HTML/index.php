<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil - The District</title>
    <link rel="stylesheet" href="/CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/img/images_the_district/the_district_brand/logo.png">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    
    
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

    <!-- Début de la div de l'image sous la nav bar du haut + texte sur l'image -->
    <div class="background-image">
        <img class="logo" src="/img/images_the_district/bg.jpg" alt="logo">
        <div class="text-overlay">
            <h2>Délicieusement connecté à tous les goûts</h2>
            <p>The District, où la saveur urbaine rencontre la rapidité du fast-food !</p>
            <form class="search-form">
                <input type="text" placeholder="Rechercher...">
            </form>
        </div>
    </div>
    <!-- Fin de la div de l'image sous la nav bar du haut + texte sur l'image -->

    <!-- Début de la div vidéo -->
    <div class="video-container">
        <video width="100%" controls autoplay muted loop>
            <source src="/video/acceuil.mp4" type="video/mp4">
            <!-- Fournir des sources supplémentaires pour une compatibilité maximale -->
            Votre navigateur ne prend pas en charge la lecture de vidéos.
        </video>
    </div>
    <!-- Fin de la div vidéo -->

</body>
<!-- Début de la div de la nav bar du bas -->
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
<!-- Fin de la div de la nav bar du bas -->

</html>