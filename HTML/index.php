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

        <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

        require 'DAO.php';
	$carouselContent = get_plats('localhost', 'theo', 'theo', '1234');
	$carouselCategorie = get_categories('localhost', 'theo', 'theo', '1234');
    session_start();
    ?>

    
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

   

    <div class="row bg-light">
		    <div class="card my-5 border-0 rounded-0">
	<div class="row">
	<div class="col-md-6">
            <div id="platsCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicateurs -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#platsCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#platsCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#platsCarousel" data-bs-slide-to="2"></li>
                    <li data-bs-target="#platsCarousel" data-bs-slide-to="3"></li>
                    <li data-bs-target="#platsCarousel" data-bs-slide-to="4"></li>
                    <li data-bs-target="#platsCarousel" data-bs-slide-to="5"></li>
                </ol>

                <!-- Slides du carrousel -->
                <div class="carousel-inner">
				 <?php echo $carouselContent; ?> 
                </div>
                <!-- Contrôles du carrousel -->
                <a class="carousel-control-prev" href="#platsCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#platsCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
				</div>
			<div class="col-md-6">
        <div class="card-body px-0"> <!-- Crée le corps de la carte avec aucun espace de remplissage horizontal -->
            <h3 class="card-title">Nos Plats les plus vendus</h3>
            <p class="card-text">
                Pour découvrir les autres plats cliquer ci-dessous
            </p>
			<p class="card-text"><a href="plats.php" class="btn text-muted">Découvrir les plats</a></p>
        </div>
    </div>
</div>
</div>
</div>
</div>

<div class="carouselcategorie">
<div class="row bg-light">
		    <div class="card my-5 border-0 rounded-0">
	<div class="row">
	<div class="col-md-6">
            <div id="categorieCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicateurs -->
                

                <!-- Slides du carrousel -->
                <div class="carousel-inner">
				<?php echo $carouselCategorie; ?> 
                </div>
                <!-- Contrôles du carrousel -->
                <a class="carousel-control-prev" href="#categorieCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#categorieCarousel" role="button" data-bs-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
   				<span class="visually-hidden">Next</span>
				</a>

            </div>
				</div>
			<div class="col-md-6">
        <div class="card-body px-0"> <!-- Crée le corps de la carte avec aucun espace de remplissage horizontal -->
            <h3 class="card-title">Nos Catégorie les plus populaires</h3>
            <p class="card-text">
                Pour découvrir les autres catégories cliquer ci-dessous
            </p>
			<p class="card-text"><a href="decouvrir.php" class="btn text-muted">Découvrir les catégories</a></p>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
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