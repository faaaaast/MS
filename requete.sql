-- Crée la table utilisateurs dans la base de données 
CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone VARCHAR(255),
    adress VARCHAR (255)
);

-- Ajouté une colonne dans la table utilisateurs
ALTER TABLE utilisateurs
ADD adress VARCHAR(255);

-- Ajouté des données d'un utilisateurs dans la base de données 
INSERT INTO utilisateurs (nom, prenom, email, phone, adress)
VALUES ('Duval', 'Théo', 'theoduval76@icloud.com', '0618150240', '11 rue de la gare');

-- Supprimé une ligne dans la table utilisateurs 
DELETE FROM utilisateurs
WHERE id = 1;

-- Modifié l'adresse dans la table utilisateurs
UPDATE utilisateurs
SET adress = '15 rue de la gare'
WHERE id = 3; 
