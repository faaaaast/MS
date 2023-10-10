<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Salades - The District </title>
    <link rel="stylesheet" href="/CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <!-- Début de la div contenant les aliments -->
    <hr>
    <h1 class="salade"> Nos choix de salades</h1>
    <hr>
    <div class="card-group">
        <div class="card" style="width: 20rem;">
            <img src="/img/images_the_district/catégorie/saladecesar.png" class="card-img-top" alt="salade-cesar">
            <div class="card-body">
                <h5 class="card-title">Salades César</h5>
                <p class="card-text">Quoi de mieux qu'une petite salade pour commencer un bon repas ? </p>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="/img/images_the_district/catégorie/saladedepate.png" class="card-img-top" alt="salade-de-pates">
            <div class="card-body">
                <h5 class="card-title">Salades de pâtes</h5>
                <p class="card-text">Quoi de mieux qu'une petite salade pour commencer un bon repas ? </p>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="/img/images_the_district/catégorie/saladederiz.png" class="card-img-top" alt="salade-de-riz">
            <div class="card-body">
                <h5 class="card-title">Salades de riz</h5>
                <p class="card-text">Quoi de mieux qu'une petite salade pour commencer un bon repas ? </p>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="/img/images_the_district/catégorie/salademosaique.png" class="card-img-top" alt="salade Mosaique">
            <div class="card-body">
                <h5 class="card-title">Salades Mosaique</h5>
                <p class="card-text">Quoi de mieux qu'une petite salade pour commencer un bon repas ? </p>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="/img/images_the_district/catégorie/salademarocainne.png" class="card-img-top" alt="salade Marocaine">
            <div class="card-body">
                <h5 class="card-title">Salades Marocaine</h5>
                <p class="card-text">Quoi de mieux qu'une petite salade pour commencer un bon repas ? </p>
            </div>
        </div>
    </div>
    <!-- Fin de la div contenant les aliments -->

    <!-- Début de la div du bouton directionnel vers la page catégorie -->
    <div class="bouton">
        <a href="categorie.php" class="btn btn-primary zoom">Retour à la page catégorie</a>
    </div>
    <!-- Fin de la div du bouton directionnel vers la page catégorie -->

</body>

</html>