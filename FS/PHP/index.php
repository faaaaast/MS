<?php

    include('connexion.php');

    // Récupérer tous les disques depuis la base de données
    $requete = $db->query("SELECT * FROM disc");
    
    // Stocker les résultats dans un tableau d'objets
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    
    // Fermer la requête
    $requete->closeCursor();
    
    // Compter le nombre de disques récupérés
    $count = count($tableau);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des disques</title>
    <style>
        /* Styles CSS pour la mise en page */
        .disc-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .disc {
            width: 48%; /* 48% pour laisser de l'espace entre les colonnes */
            display: flex;
            margin-bottom: 20px;
        }
        .disc-image {
            width: 30%;
            padding: 10px;
            box-sizing: border-box;
        }
        .disc-image img {
            max-width: 100%;
            height: 300px;
            width: 300px;
        }
        .disc-details {
            width: 70%;
            padding: 10px;
            box-sizing: border-box;
        }
        .btn {
            color: white;
            background-color: blue;
        }
        .fixed-button {
            position: fixed;
            bottom: 20px;
            left: 45%;
            transform: translateX(-50%);
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-details {
            color: white;
            background-color: blue;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <!-- Afficher le nombre de disques -->
    <h1>Liste des disques (<?= $count ?>)</h1>
   
    <div class="disc-container">
        <?php foreach ($tableau as $disc): ?>
            <div class="disc">
                <div class="disc-image">
                    <img src="<?= $disc->disc_picture ?>" alt="<?= $disc->disc_title ?>">
                </div>
                <div class="disc-details">
                    <h2><?= $disc->disc_title ?></h2>
                    <p><strong>Label:</strong> <?= $disc->disc_label ?></p>
                    <p><strong>Genre:</strong> <?= $disc->disc_genre ?></p>
                    <p><strong>Year:</strong> <?= $disc->disc_year ?></p>
                    <!-- Lien vers les détails du disque -->
                    <a href="details_disc.php?disc_id=<?= $disc->disc_id ?>" style="text-decoration: none;" class="btn-details">Détails</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- Lien pour ajouter un disque -->
    <a href="add_form.php" style="text-decoration: none;" class="fixed-button">Ajouter un disque</a>

    <script>
        // JavaScript pour gérer les boutons d'édition
        const editButtons = document.querySelectorAll('.edit-button');
        const editForms = document.querySelectorAll('.edit-form');

        editButtons.forEach((button, index) => {
            button.addEventListener('click', (event) => {
                event.preventDefault();
                editForms[index].submit();
            });
        });
    </script>
</body>
</html>