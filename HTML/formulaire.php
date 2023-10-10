<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/CSS/style.css">
</head>
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
    
<body>
<section class="cc-menu merriweather py-5 centered-form"> 
    <form id="monFormulaire">
        <div class="col-12">
            <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Nom et Prenom :</label>
                <div class="input-wrapper">
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Votre Nom et Prenom:" >
                    <div class="text-red">Ce champs est obligatoire</div>
                </div>
            </div>
        </div>
    
    <br>
    
    
          <div class="row g-5">
            <div class="col">
                <label for="exampleFormControlInput3" class="form-label" >Email :</label>
                <input type="mail" class="form-control"  id="exampleFormControlInput3" placeholder="example@gmail.com :" >
                <div class="text-red">Ce champs est obligatoire</div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput2" class="form-label">Téléphone :</label>
                    <input type="text" class="form-control"  id="exampleFormControlInput2" placeholder="0123456789 :" >
                    <div class="text-red">Ce champs est obligatoire</div>
                </div>
            </div>
          </div>
          
    <br>
    
    <div class="col-12">
        <div class="form-group">
          <label for="exampleFormControlInput4" class="form-label">Votre adresse :</label>
          <div class="input-wrapper">
            <input type="text" class="form-control custom-height" id="exampleFormControlInput4" placeholder="Votre adresse :" >
            <div class="text-red">Ce champ est obligatoire</div>
          </div>
        </div>
      </div>
      
    <br>
    
    <div class="container-fluid">
        <div class="text-end">
            <button class="btn btn-primary" type="submit" onclick="validerCommande(event)">Payer</button>
        </div>
    </div>
    </form>
</section>
<script src="/js/formulaire.js"></script>
</body>
</html>