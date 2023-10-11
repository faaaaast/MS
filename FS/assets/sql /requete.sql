-- REQUETES SQL
-- PHASE 1 

1. 
    SELECT * from employe;

2.
    SELECT * from dept;

3.
    SELECT nom, dateemb, nosup, nodep, salaire from employe;

4.
    SELECT distinct titre from employe;

5.

6.
    SELECT nom, noemp, nodep from employe where titre = "secrétaire";

7.  
    SELECT nom, nodep from employe where nodep > 40;

8.
    SELECT nom, prenom from employe where nom < prenom;

9.
    SELECT nom, salaire, nodep from employe where titre = 'représentant' and nodep = 35 and salaire > 20000;

10.
    SELECT nom, titre, salaire from employe where titre = 'représentant' or titre = 'président';

11.
    SELECT nom, titre, nodep, salaire from employe where nodep = 34 and (titre = 'représentant' OR titre = 'secrétaire');

12.
    SELECT nom, titre, nodep, salaire from employe where (titre = 'représentant' or titre = 'secrétaire') and nodep = 34;

13.
    SELECT nom, salaire from employe where salaire between 20000 and 30000;

15.
    SELECT nom from employe where nom like 'H%';

16.
    SELECT nom from employe where nom like '%n';

17.  
    SELECT nom from employe where nom like '__u%';

18. 
    SELECT salaire, nom from employe where nodep = 41 order by salaire asc;

19.
    SELECT salaire, nom from employe where nodep = 41 order by salaire desc;

20.
    SELECT titre, salaire, nom from employe order by titre asc, salaire desc;

21.
    SELECT tauxcom, salaire, nom from employe order by tauxcom asc;

22.
    SELECT nom, salaire, tauxcom, titre from employe where tauxcom is null;

23.
    SELECT nom, salaire, tauxcom, titre from employe where tauxcom is not null; 

24.
    SELECT nom, salaire, tauxcom, titre from employe where tauxcom < 15; 

25.
    SELECT nom, salaire, tauxcom, titre from employe where tauxcom > 15; 

26.
    SELECT nom, salaire, tauxcom, salaire * tauxcom AS commission FROM employe WHERE tauxcom IS NOT NULL;

27.
    SELECT nom, salaire, tauxcom, salaire * tauxcom AS commission FROM employe WHERE tauxcom IS NOT NULL order by commission asc;

28.
    SELECT CONCAT(nom, ' ', prenom) AS nom_complet FROM employe;

29.
    SELECT SUBSTRING(nom, 1, 5) AS cinq_premieres_lettres FROM employe;

30.
	SELECT nom, locate('r', nom) as rang_lettre_r from employe;

31.
    SELECT nom, UPPER(nom), LOWER(nom) from employe  where nom = 'vrante';

32.
    SELECT nom, length(nom) from employe;
    
---------------------------------------------------------------------------------------------

-- PHASE 2

1bis - SELECT employe.prenom, dept.noregion
       FROM employe 
       JOIN dept ON employe.nodep = dept.nodept

2bis - SELECT dept.nodept AS numero_departement, dept.nom AS nom_departement, employe.nom AS  nom_employe
       FROM dept
       JOIN employe ON dept.nodept = employe.noemp
       ORDER BY dept.nodept

3bis - SELECT employe.nom 
       FROM employe 
       JOIN dept ON dept.nodept = employe.nodep 
       WHERE dept.nom='distribution'

4bis - SELECT e.nom AS nom_employe, e.salaire AS salaire_employe,
       p.nom AS nom_patron, p.salaire AS salaire_patron
       FROM employe e
       JOIN employe p ON e.nosup = p.noemp
       WHERE e.salaire > p.salaire

5bis - SELECT e.nom, e.titre
       FROM employe e
       WHERE e.titre = (SELECT titre FROM employe WHERE nom = 'Amartakaldire')

6bis - SELECT e.nom, e.salaire, e.nodep
       FROM employe e
       WHERE e.salaire > (
       SELECT MIN(salaire)
       FROM employe
       WHERE nodep = 31
       )
       ORDER BY e.nodep, e.salaire

7bis - SELECT e.nom, e.salaire, e.nodep
       FROM employe e
       WHERE e.salaire > ALL (
       SELECT salaire
       FROM employe
       WHERE nodep = 31
       )
       ORDER BY e.nodep, e.salaire

8bis - SELECT e.nom, e.titre
       FROM employe e
       WHERE e.nodep = 31
       AND e.titre IN (
       SELECT titre
       FROM employe
       WHERE nodep = 32
       )

9bis - SELECT e.nom, e.titre
       FROM employe e
       WHERE e.nodep = 31
       AND e.titre NOT IN (
       SELECT titre
       FROM employe
       WHERE nodep = 32
       )

10bis - SELECT e.nom, e.titre, e.salaire
        FROM employe e
        WHERE e.titre = (SELECT titre FROM employe WHERE nom = 'fairent')
        AND e.salaire = (SELECT salaire FROM employe WHERE nom = 'fairent')

11bis - SELECT d.nodept, d.nom AS nom_departement, IFNULL(e.nom, 'Aucun employé') AS nom_employe
        FROM dept d
        LEFT JOIN employe e ON d.nodept = e.nodep
        ORDER BY d.nodept


1 - select titre, count(*) from employe group by titre

2 - SELECT dept.noregion, AVG(employe.salaire) AS moyenne_salaire, SUM(employe.salaire)AS somme_salaire
    FROM employe AS employe
    JOIN dept as dept ON employe.nodep = dept.nodept
    GROUP BY dept.noregion

3 - select nodep from employe group by nodep having count(*) >= 3

4 - select left(nom, 1) as initiale, count(*) from employe group by initiale having count(*) >= 3

5 - SELECT MAX(salaire) AS salaire_max, MIN(salaire) AS salaire_mini, MAX(salaire) - MIN(salaire) AS ecart FROM employe

6 - SELECT COUNT(DISTINCT titre) AS nombre_titres_differents FROM employe

7 - SELECT titre, COUNT(*) AS nombre_employes FROM employe GROUP BY titre

8 - SELECT dept.nom, COUNT(*) AS nombre_employes
    FROM employe AS employe
    JOIN dept AS dept ON employe.nodep = dept.nodept
    GROUP BY dept.nom;

9 - SELECT titre, AVG(salaire) AS moyenne_salaire
    FROM employe
    GROUP BY titre
    HAVING AVG(salaire) > (SELECT AVG(salaire) FROM employe WHERE titre = 'Représentant');


10 - SELECT 
     COUNT(salaire) AS nombre_salaires_renseignes,
     COUNT(tauxcom) AS nombre_taux_commission_renseignes
     FROM employe

---------------------------------------------------------------------------------------------

-- Manipuler une base de données

-- Ajouts de trois employés dans la base de données 

insert into employe (noemp, nom, prenom, dateemb, nosup, titre, nodep, salaire)
values (00026,'duval','theo','2004-11-17 00:00:00','10','stagiaire','50','15000')

insert into employe (noemp, nom, prenom, dateemb, nosup, titre, nodep, salaire)
values (00027,'duval','theo','2004-11-17 00:00:00','10','stagiaire','50','15000')

insert into employe (noemp, nom, prenom, dateemb, nosup, titre, nodep, salaire)
values (00028,'duval','theo','2004-11-17 00:00:00','10','stagiaire','50','15000')

-- Ajouts d'un département dans la base de données

insert into dept (nodept, nom, noregion)
values (80, 'stagiaire', '6')

-- Uptade employé 17 +10%

update employe 
set salaire = salaire + 1400
where noemp = 17

-- Uptade nom de departement 45 

update dept 
set nom = 'logistique'
where nodept = 45

-- Delete du dernier employé ajouter à la base de données 

delete from employe 
where noemp = '28'

EVAL 

1 - select * from commande

2 - select plat.libelle as plat, plat.prix, categorie.libelle as categorie
    from plat
    inner join categorie on plat.id_categorie = categorie.id;

3 - select categorie.libelle as categorie, COUNT(*) as nombre_plats_actifs
    from plat
    inner join categorie on plat.id_categorie = categorie.id
    where plat.active = 'Yes'
    group by categorie.libelle;

4 - select id_plat, SUM(quantite) as total_ventes
    from commande
    group by id_plat
    order by total_ventes desc;

5 - select id_plat, SUM(total) as total_ventes
    from commande
    group by id_plat
    order by total_ventes desc
    limit 1;

6 - select commande.nom_client, sum(plat.prix * commande.quantite) as chiffre_affaire
    from commande
    join plat on commande.id_plat = plat.id
    group by commande.nom_client
    order by chiffre_affaire desc;
    
    
1 - DELETE FROM plat WHERE active = 'No';

2 - DELETE FROM commande WHERE etat = 'Livrée';

3 - INSERT INTO categorie (libelle, image, active) VALUES ('Tacos','tacos_cat.jpg','Yes');

    INSERT INTO plat (libelle, description, prix, image, id_categorie, active)
    VALUES ('Giga Tacos', 'Tacos garnie avec 5 doses de viandes au choix, frites, sauce fromagère maison et sauces au choix. Vous pouvez compléter votre composition avec nos irrésistibles suppléments !', 15.00,'tacos_cat.jpg', '15', 'Yes');

4 - UPDATE plat
    SET prix = prix * 1.10
    WHERE id_categorie = (SELECT id FROM categorie WHERE libelle = 'Pizza');