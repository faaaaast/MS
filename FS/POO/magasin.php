<?php
// Définition de la classe Magasin
class Magasin {
    private $nom;
    private $adresse;
    private $codePostal;
    private $ville;
    private $modeRestauration;

    // Constructeur de la classe Magasin
    public function __construct($nom, $adresse, $codePostal, $ville, $modeRestauration) {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->modeRestauration = $modeRestauration;
    }

    // Méthode pour obtenir le nom du magasin
    public function getNom() {
        return $this->nom;
    }

    // Méthode pour obtenir l'adresse du magasin
    public function getAdresse() {
        return $this->adresse;
    }

    // Méthode pour obtenir le code postal du magasin
    public function getCodePostal() {
        return $this->codePostal;
    }

    // Méthode pour obtenir la ville du magasin
    public function getVille() {
        return $this->ville;
    }

    // Méthode pour obtenir le mode de restauration du magasin
    public function getModeRestauration() {
        return $this->modeRestauration;
    }
}

// Définition de la classe Employe
class Employe {
    private $nom;
    private $prenom;
    private $dateEmbauche;
    private $fonction;
    private $salaireAnnuel;
    private $service;
    private $magasin;
    private $enfants = []; 

    // Constructeur de la classe Employe
    public function __construct($nom, $prenom, $dateEmbauche, $fonction, $salaireAnnuel, $service, $magasin) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->fonction = $fonction;
        $this->salaireAnnuel = $salaireAnnuel;
        $this->service = $service;
        $this->magasin = $magasin;
    }

    // Méthode pour obtenir le nom de l'employé
    public function getNom() {
        return $this->nom;
    }

    // Méthode pour obtenir le prénom de l'employé
    public function getPrenom() {
        return $this->prenom;
    }

    // Méthode pour obtenir la date d'embauche de l'employé
    public function getDateEmbauche() {
        return $this->dateEmbauche;
    }

    // Méthode pour obtenir la fonction de l'employé
    public function getFonction() {
        return $this->fonction;
    }

    // Méthode pour obtenir le salaire annuel de l'employé
    public function getSalaireAnnuel() {
        return $this->salaireAnnuel;
    }

    // Méthode pour obtenir le service de l'employé
    public function getService() {
        return $this->service;
    }

    // Méthode pour obtenir le magasin auquel l'employé est affecté
    public function getMagasin() {
        return $this->magasin;
    }

    // Méthode pour obtenir le mode de restauration de l'employé en utilisant le magasin associé
    public function getModeRestauration() {
        $magasin = $this->magasin;
        return $magasin->getModeRestauration();
    }

    public function peutAvoirChequesVacances() {
        // Obtenez la date actuelle
        $dateActuelle = new DateTime();

        // Convertissez la date d'embauche en objet DateTime
        $dateEmbauche = new DateTime($this->dateEmbauche);

        // Calculez la différence entre les deux dates en années
        $difference = $dateActuelle->diff($dateEmbauche);

        // Vérifiez si l'employé a au moins un an d'ancienneté
        return $difference->y >= 1;
    }

    public function ajouterEnfant($nom, $age) {
        $enfant = new Enfant($nom, $age);
        $this->enfants[] = $enfant;
    }

    // Méthode pour obtenir la liste des enfants de l'employé
    public function getEnfants() {
        return $this->enfants;
    }
}

class Enfant {
    private $nom;
    private $age;

    // Constructeur de la classe Enfant
    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    // Méthode pour obtenir le nom de l'enfant
    public function getNom() {
        return $this->nom;
    }

    // Méthode pour obtenir l'âge de l'enfant
    public function getAge() {
        return $this->age;
    }

    // Méthode pour déterminer le montant du chèque Noël pour cet enfant
    public function getMontantChequeNoel() {
        if ($this->age >= 0 && $this->age <= 10) {
            return 20; // 20 € pour les enfants de 0 à 10 ans
        } elseif ($this->age >= 11 && $this->age <= 15) {
            return 30; // 30 € pour les enfants de 11 à 15 ans
        } elseif ($this->age >= 16 && $this->age <= 18) {
            return 50; // 50 € pour les enfants de 16 à 18 ans
        } else {
            return 0; // Pas de chèque Noël pour cet enfant
        }
    }
}

// Création de plusieurs instances de la classe Magasin
$magasin1 = new Magasin("Afpa", "123 rue amiens", "80000", "Amiens", "Tickets restaurants");
$magasin2 = new Magasin("Magasin B", "456 rue amiens", "80000", "Amiens", "Tickets restaurants");
$magasin3 = new Magasin("Magasin C", "789 rue amiens", "80000", "Amiens", "Restaurant d'entreprise");


// Création d'un employé associé à ce magasin
$employe1 = new Employe("Doe", "John", "2020-11-15", "Ingénieur", 50000, "Développement", $magasin1);
$employe1->ajouterEnfant("Enfant1", 8);
$employe2 = new Employe("Smith", "Alice", "2019-08-10", "Comptable", 45000, "Comptabilité", $magasin3);
$employe2->ajouterEnfant("Enfant2", 19);
$employe3 = new Employe("Johnson", "Bob", "2023-12-20", "Vente", 48000, "Commercial", $magasin1);
$employe3->ajouterEnfant("Enfant3", 12);
$employe4 = new Employe("Brown", "Emily", "2018-03-05", "RH", 52000, "Ressources Humaines", $magasin3);
$employe4->ajouterEnfant("Enfant4", 29);
$employe5 = new Employe("Wilson", "Mike", "2023-12-28", "Marketing", 49000, "Marketing", $magasin2);
$employe5->ajouterEnfant("Enfant5", 18);
$employes = [$employe1, $employe2, $employe3, $employe4, $employe5];

// Pour obtenir le magasin associé à un employé
$magasinDeLEmploye = $employe1->getMagasin();

// Affichage des informations du magasin associé a l'employé
echo "4 - L'entreprise est constituée de magasins implantés sur tout le territoire français : <br>";
echo "Nom du magasin : " . $magasinDeLEmploye->getNom() . "<br>";
echo "Adresse du magasin : " . $magasinDeLEmploye->getAdresse() . "<br>";
echo "Code postal du magasin : " . $magasinDeLEmploye->getCodePostal() . "<br>";
echo "Ville du magasin : " . $magasinDeLEmploye->getVille() . "<br>";
echo "Nom de l'employé : " . $employe1->getNom() . "<br>";
echo "Prénom de l'employé : " . $employe1->getPrenom() . "<br>";
echo "Date d'embauche de l'employé : " . $employe1->getDateEmbauche() . "<br>";
echo "Fonction de l'employé : " . $employe1->getFonction() . "<br>";
echo "Salaire annuel de l'employé : " . $employe1->getSalaireAnnuel() . "K euros<br>";
echo "Service de l'employé : " . $employe1->getService() . "<br><br>";

// Affichage des informations du mode de restauration des employés
echo "5- Afficher chaque mode de restauration de chaque employé selon le magasin dans lequel il est affecté : <br>";
echo "Mode de restauration de l'employé 1 : " . $employe1->getModeRestauration() . "<br>";
echo "Mode de restauration de l'employé 2 : " . $employe2->getModeRestauration() . "<br>";
echo "Mode de restauration de l'employé 3 : " . $employe3->getModeRestauration() . "<br>";
echo "Mode de restauration de l'employé 4 : " . $employe4->getModeRestauration() . "<br>";
echo "Mode de restauration de l'employé 5 : " . $employe5->getModeRestauration() . "<br><br>";

// affichage de si les employés peuvent disposer de chèques-vacances ou non
echo "6- Afficher si les employés peuvent disposer de chèques-vacances ou non : <br>";
// Parcourir chaque employé dans le tableau $employes
foreach ($employes as $employe) {
    // Vérifier si l'employé peut avoir des chèques-vacances en utilisant la méthode peutAvoirChequesVacances()
    if ($employe->peutAvoirChequesVacances()) {
        // Afficher un message indiquant que l'employé peut avoir des chèques-vacances
        echo $employe->getNom() . " peut disposer de chèques-vacances.<br>";
    } else {
        // Afficher un message indiquant que l'employé ne peut pas avoir de chèques-vacances
        echo $employe->getNom() . " ne peut pas disposer de chèques-vacances.<br>";
    }
}
echo"<br>";
echo"7- Modifier le programme afin de gérer l'attribution des chèques Noël aux enfants des salariés : <br>";
foreach ($employes as $employe) {
    $enfants = $employe->getEnfants();
    $montantTotal = 0;
    foreach ($enfants as $enfant) {
        $montantTotal += $enfant->getMontantChequeNoel();
    }
    echo $employe->getNom() . " peut avoir des chèques Noël (Montant total : " . $montantTotal . " €).<br>";
}


?>