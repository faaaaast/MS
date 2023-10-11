<?php

$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "district";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // configurer le mode d'erreur PDO pour générer des exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté avec succès à la base de données";
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: <br>" . $e->getMessage();
}
echo"<br>";


$stmt = $conn->query("SELECT * FROM plat");

while ($row = $stmt->fetch()) {
    
    echo $row['libelle'] . "<br>";
}

echo "<br>";

$id_categorie = 10;
$stmt = $conn->prepare("SELECT * FROM plat WHERE id_categorie = :id_categorie");
$stmt->bindValue(':id_categorie', $id_categorie);
$stmt->execute();

while ($row = $stmt->fetch()) {
    echo $row['libelle'] . "<br>";
}



?>