<?php
include('connexion.php');

// Récupérer les données du formulaire depuis la superglobale $_POST
$disc_id = $_POST['disc_id'];
$disc_title = $_POST['disc_title'];
$disc_label = $_POST['disc_label'];
$disc_year = $_POST['disc_year'];
$disc_genre = $_POST['disc_genre'];
$disc_price = $_POST['disc_price'];
$artist_id = $_POST['artist_id'];

// Préparer une requête SQL pour mettre à jour les données du disque dans la base de données
$requete = $db->prepare("UPDATE disc SET disc_title=?, disc_label=?, disc_year=?, disc_genre=?, disc_price=?, artist_id=? WHERE disc_id=?");

// Exécuter la requête avec les nouvelles valeurs récupérées du formulaire
$requete->execute(array($disc_title, $disc_label, $disc_year, $disc_genre, $disc_price, $artist_id, $disc_id));

// Rediriger l'utilisateur vers la page de détails du disque mis à jour
header("Location: details_disc.php?disc_id=$disc_id");
?>