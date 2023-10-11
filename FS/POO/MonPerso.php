<?php
// Inclure le fichier de la classe Personnage
require_once('Personnage.php');

// Créer une instance de la classe Personnage
$p = new Personnage();

// Définir les attributs du personnage
$p->setNom("Lebowski");
$p->setPrenom("Jeff");
$p->setAge(20);
$p->setSexe("Masculin");

// Afficher les informations du personnage
echo "Nom : " . $p->getNom() . "<br>";
echo "Prénom : " . $p->getPrenom() . "<br>";
echo "Âge : " . $p->getAge() . "<br>";
echo "Sexe : " . $p->getSexe() . "<br>";
?>