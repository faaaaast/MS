<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>EXO4</h2>    

<?php
$date = "07/14/2019";
$num_semaine = date("W", strtotime($date)); //convertit la chaîne de caractères représentant la date en une valeur de temps Unix
echo $num_semaine;
?>

<br><hr><br>

<?php
$date_actuelle = new DateTime(); 
$date_fin_formation = new DateTime("28-07-2023"); //pour calculer le nombre de jours restants
$jours_restants = $date_actuelle->diff($date_fin_formation)->format("%a"); //Cela calcule la différence entre les deux dates
echo $jours_restants;
?>

<br><hr><br>

<?php
$annee = 2023;
$est_bissextile = date("L", mktime(0, 0, 0, 1, 1, $annee)); //est utilisée pour créer un timestamp Unix correspondant au 1er janvier de l'année spécifiée
echo $est_bissextile ? "True" : "False";
?>

<br><hr><br>

<?php
$date_str = "32/17/2019";
$date_timestamp = strtotime($date_str); //prend cette chaîne de caractères en tant qu'argument et la convertit en un timestamp Unix.
if ($date_timestamp === false) {
    echo "La date est erronée.";
} else {
    echo "La date est valide.";
}
?>

<br><hr><br>

<?php
$heure_actuelle = date("H\hi"); //Dans ce format, "H" représente l'heure , "i" représente les minutes.
echo $heure_actuelle;
?>

<br><hr><br>

<?php
$date_actuelle = date("Y-m-d");
$date_plus_un_mois = date("Y-m-d", strtotime("+1 month", strtotime($date_actuelle))); //calcule le timestamp Unix correspondant à un mois après la date actuelle.
echo $date_plus_un_mois;
?>

<br><hr><br>

<?php
$timestamp = 1000200000;
$date = new DateTime("@$timestamp");
$evenement = $date->format('d/m/Y H:i:s'); //formater la date
echo "Le $evenement, il s'est passé quelque chose.";
?>


</body>
</html>