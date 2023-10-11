<?php
   include('connexion.php');

    // Récupérer les informations du disque à modifier en fonction de l'ID passé dans l'URL
    $requete = $db->prepare("SELECT * FROM disc WHERE disc_id = ?");
    $requete->execute(array($_GET["disc_id"]));
    $disc = $requete->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modifier le disque</title>
</head>
<body>
    <h1>Modifier le disque</h1>
    <form action="update_script.php" method="post" enctype="multipart/form-data">
        <!-- Champ caché pour stocker l'ID du disque -->
        <input type="hidden" name="disc_id" value="<?= $disc->disc_id ?>">
        
        <!-- Champs de formulaire pré-remplis avec les informations du disque -->
        <label for="disc_title">Titre:</label>
        <input type="text" name="disc_title" value="<?= $disc->disc_title ?>"><br>
        <label for="disc_label">Label:</label>
        <input type="text" name="disc_label" value="<?= $disc->disc_label ?>"><br>
        <label for="disc_year">Année:</label>
        <input type="text" name="disc_year" value="<?= $disc->disc_year ?>"><br>
        <label for="disc_genre">Genre:</label>
        <input type="text" name="disc_genre" value="<?= $disc->disc_genre ?>"><br>
        <label for="disc_price">Prix:</label>
        <input type="text" name="disc_price" value="<?= $disc->disc_price ?>"><br>
        
        
        <!-- Bouton pour soumettre le formulaire de mise à jour -->
        <input type="submit" href="index.php" value="Enregistrer les modifications">
    </form>
</body>
</html>