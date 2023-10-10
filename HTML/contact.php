<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact- The District </title>
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/FORMULAIRE/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

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

    <!-- Début de la div de l'image sous la nav bar du haut + le texte sur l'image -->
    <div class="background-image">
        <img class="logo" src="/img/images_the_district/bg.jpg" alt="logo">
        <div class="text-overlay">
            <h2>Délicieusement connecté à tous les goûts</h2>
            <p>The District, où la saveur urbaine rencontre la rapidité du fast-food !</p>
        </div>
    </div>
    <!-- Fin de la div de l'image sous la nav bar du haut + texte sur l'image -->

    <!-- Début de la div du formulaire de contact -->
    <section class="cc-menu merriweather py-5 centered-form">
        <form id="monFormulaire" action="traitement_formulaire.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Nom :</label>
                            <div class="input-wrapper">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="nom" placeholder="Votre Nom :" required>
                                <div class="text-red">Ce champs est obligatoire</div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlInput3" class="form-label">Prénom :</label>
                            <div class="input-wrapper">
                                <input type="text" class="form-control" id="exampleFormControlInput3" name="prenom" placeholder="Votre Prénom :">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br><br><br>


            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Email :</label>
                            <div class="input-wrapper">
                                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Votre Email :" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlInput2" class="form-label">Téléphone :</label>
                            <div class="input-wrapper">
                                <input type="text" class="form-control" id="exampleFormControlInput2" name="telephone" placeholder="Votre Téléphone :" required pattern="[0-9]{10}">
                                <div class="text-red">Ce champs est obligatoire</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>


            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Votre demande :</label>
                    </div>
                    <div class="col-11">
                        <textarea class="form-control w-100" id="exampleFormControlTextarea1" rows="3" name="demande" placeholder="Votre demande:"></textarea>
                    </div>
                </div>
            </div>

            <br>
            <div class="container-fluid">
                <div class="text-end">
                    <button class="btn btn-primary" type="submit" onclick="validerFormulaire()">Envoyer</button>
                </div>
            </div>
        </form>
    </section>
    <script src="/js/contact.js"></script>
    <!-- Fin de la div du formulaire de contact -->
</body>

</html>