<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste de sites</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<?php
// Lire le contenu du fichier et stocker chaque ligne dans un tableau
$liens = file('listes_sites.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Construire la page web
$html = '<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste de sites</title>
</head>
<body>
    <h1>Liste de sites indispensables à la compréhension du monde moderne</h1>
    <ul>';

// Parcourir le tableau de liens et générer les balises <li> et <a> correspondantes
foreach ($liens as $lien) {
    $html .= '<li><a href="' . $lien . '">' . $lien . '</a></li>';
}

$html .= '</ul>
</body>
</html>';

// Afficher la page web
echo $html;
?>


<br><hr><br>

<?php
$cheminFichier = 'customers.csv';

$contenuCSV = file($cheminFichier);

$utilisateurs = [];

foreach ($contenuCSV as $ligne) {
    $utilisateur = explode(',', $ligne);    //pour diviser une chaîne de caractères en utilisant une virgule comme délimiteur, et stocke les parties résultantes dans un tableau.

    $utilisateurs[] = $utilisateur;
}

echo '<table class="table table-bordered">';
echo '<thead><tr><th>Nom</th><th>Prenom</th><th>Email</th><th>Téléphone</th><th>Ville</th><th>Pays</th></tr></thead>';
echo '<tbody>';
foreach ($utilisateurs as $utilisateur) {
    echo '<tr>';
    echo '<td>' . $utilisateur[0] . '</td>';
    echo '<td>' . $utilisateur[1] . '</td>';
    echo '<td>' . $utilisateur[2] . '</td>';
    echo '<td>' . $utilisateur[3] . '</td>';
    echo '<td>' . $utilisateur[4] . '</td>';
    echo '<td>' . $utilisateur[5] . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
?>

</body>
</html>