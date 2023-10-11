<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter un disque</title>
</head>
<body>
    <h1>Ajouter un disque</h1>
    <form action="add_script.php" method="post" enctype="multipart/form-data">
        <!-- Champ pour le titre du disque -->
        <label for="disc_title">Titre du disque:</label>
        <input type="text" name="disc_title" id="disc_title" required><br><br>

        <!-- Champ pour l'année du disque -->
        <label for="disc_year">Année:</label>
        <input type="text" name="disc_year" id="disc_year" required><br><br>

        <!-- Champ pour le label du disque -->
        <label for="disc_label">Label:</label>
        <input type="text" name="disc_label" id="disc_label" required><br><br>

        <!-- Champ pour le genre du disque -->
        <label for="disc_genre">Genre:</label>
        <input type="text" name="disc_genre" id="disc_genre" required><br><br>

        <!-- Champ pour le prix du disque -->
        <label for="disc_price">Prix:</label>
        <input type="text" name="disc_price" id="disc_price" required><br><br>

        <!-- Liste déroulante pour sélectionner l'artiste du disque -->
        <label for="artist_id">Artiste:</label>
        <select name="artist_id" id="artist_id" required>
            <option value="">Sélectionnez un artiste</option>
            <?php
            include('connexion.php');

            // Récupération de la liste des artistes depuis la base de données
            $requete = $db->query("SELECT * FROM artist");
            while ($artist = $requete->fetch(PDO::FETCH_ASSOC)) {
                // Création des options de la liste déroulante avec les noms des artistes et leurs IDs
                echo "<option value='" . $artist['artist_id'] . "'>" . $artist['artist_name'] . "</option>";
            }
            ?>
        </select><br><br>

        <!-- Champ pour téléverser l'image du disque -->
        <label for="disc_picture">Image du disque:</label><br><br>
        <input type="file" name="disc_picture" id="disc_picture" required><br><br>

        <!-- Bouton pour soumettre le formulaire -->
        <input type="submit" value="Ajouter">

        <!-- Bouton pour retourner à la liste des disques sans soumettre le formulaire -->
        <a href="index.php"><input type="button" value="Retour"></a>
    </form>
</body>
</html>