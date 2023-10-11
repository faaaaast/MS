<?php

class Employe {
    // Propriétés de la classe 
    private $nom;
    private $prenom;
    private $dateEmbauche;
    private $fonction;
    private $salaireAnnuel;
    private $service;

    // initialiser les propriétés lors de la creation
    public function __construct($nom, $prenom, $dateEmbauche, $fonction, $salaireAnnuel, $service) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->fonction = $fonction;
        $this->salaireAnnuel = $salaireAnnuel;
        $this->service = $service;
    }

     // Méthode pour calculer la prime annuelle
     public function calculerPrime() {
        // Obtenez la date actuelle
        $dateActuelle = new DateTime();

        // Vérifiez si la date actuelle est le 30 novembre (date de versement de la prime)
        if ($dateActuelle->format('d-m') === '19-09') {
            // Calcul de la prime basée sur le salaire annuel et l'ancienneté
            $prime = ($this->salaireAnnuel * 0.05) + ($this->salaireAnnuel * ($this->anneesDansEntreprise() * 0.02));

            // Message de l'ordre de transfert
            $message = "Ordre de transfert de la prime de {$prime} K euros envoyé à la banque.";

            return $message;
        } else {
            return "Aucune prime à verser aujourd'hui.";
        }
    }

    // Méthode pour calculer depuis combien d'années l'employé est dans l'entreprise
    public function anneesDansEntreprise() {
        // Obtenez la date actuelle
        $dateActuelle = new DateTime();
        
        // Convertissez la date d'embauche en objet DateTime
        $dateEmbauche = new DateTime($this->dateEmbauche);

        // Calculez la différence entre les deux dates en années
        $difference = $dateActuelle->diff($dateEmbauche);
        return $difference->y;
    }

    // Méthodes d'accès pour les propriétés
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDateEmbauche() {
        return $this->dateEmbauche;
    }

    public function getFonction() {
        return $this->fonction;
    }

    public function getSalaireAnnuel() {
        return $this->salaireAnnuel;
    }

    public function getService() {
        return $this->service;
    }
}

$employe = new Employe("toto", "tutu", "2000-11-04", "Président", 500, "commercial");

$anneesDansEntreprise = $employe->anneesDansEntreprise();

echo "1- Ecrire une classe Employe avec les informations (propriétés) suivantes : <br>";
echo "Nom de l'employé : " . $employe->getNom() . "<br>";
echo "Prénom de l'employé : " . $employe->getPrenom() . "<br>";
echo "Date d'embauche de l'employé : " . $employe->getDateEmbauche() . "<br>";
echo "Fonction de l'employé : " . $employe->getFonction() . "<br>";
echo "Salaire annuel de l'employé : " . $employe->getSalaireAnnuel() . "K euros<br>";
echo "Service de l'employé : " . $employe->getService() . "<br>";
echo "prime de l'émployé : " . $employe->calculerPrime() . "<br><br>";

echo"2- Dans la classe Employe, écrire une méthode permettant de savoir depuis combien d'années l'employé est dans l'entreprise : <br>";
echo "Années dans l'entreprise : " . $anneesDansEntreprise . " ans<br><br>";

echo"3- Dans la classe Employe, écrire le(s) méthode(s) permettant de déduire le montant de cette prime et de donner l'ordre de transfert à la banque le jour du versement : <br>";
$employe1 = new Employe("Doe", "John", "2020-11-15", "Ingénieur", 50000, "Développement");
$employe2 = new Employe("Smith", "Alice", "2019-08-10", "Comptable", 45000, "Comptabilité");
$employe3 = new Employe("Johnson", "Bob", "2021-05-20", "Vente", 48000, "Commercial");
$employe4 = new Employe("Brown", "Emily", "2018-03-05", "RH", 52000, "Ressources Humaines");
$employe5 = new Employe("Wilson", "Mike", "2017-02-28", "Marketing", 49000, "Marketing");
// Affichez le montant des primes pour chaque employé
echo "Prime de l'employé 1 : " . $employe1->calculerPrime() . "<br>";
echo "Prime de l'employé 2 : " . $employe2->calculerPrime() . "<br>";
echo "Prime de l'employé 3 : " . $employe3->calculerPrime() . "<br>";
echo "Prime de l'employé 4 : " . $employe4->calculerPrime() . "<br>";
echo "Prime de l'employé 5 : " . $employe5->calculerPrime() . "<br><br>";
?>