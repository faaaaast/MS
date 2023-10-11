<?php
class Personnage
{
    // Attributs privés pour stocker les données du personnage
    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    // obtenir le nom du personnage
    public function getNom()
    {
        return $this->nom;
    }

    // définir le nom du personnage
    public function setNom($nom)
    {
        // Utilisation de $this pour faire référence à l'instance courante (l'objet)
        // Permet de définir la valeur de l'attribut privé $nom avec la valeur passée en argument
        $this->nom = $nom;
    }

    // obtenir le prénom du personnage
    public function getPrenom()
    {
        return $this->prenom;
    }

    // définir le prénom du personnage
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    // obtenir l'âge du personnage
    public function getAge()
    {
        return $this->age;
    }

    // définir l'âge du personnage
    public function setAge($age)
    {
        $this->age = $age;
    }

    // obtenir le sexe du personnage
    public function getSexe()
    {
        return $this->sexe;
    }

    // Setter pour définir le sexe du personnage
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }
}
?>