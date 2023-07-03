-- 2.2 Faire les requêtes SQL:

-- 1- Sélectionnez tous les employés réguliers avec un salaire mensuel supérieur à 3000
-- 2- Mettez à jour le salaire de base de tous les employés réguliers en augmentant de 10%
-- 3- Supprimez tous les gestionnaires dont le bonus annuel est inférieur à 5000
-- 4- Sélectionnez le salaire mensuel moyen de tous les cadres supérieurs
-- 5- Sélectionnez les noms des employés et leurs salaires mensuels triés par ordre décroissant de salaire


-- Solution:

-- 1. Sélectionnez tous les employés réguliers avec un salaire mensuel supérieur à 3000 :

        SELECT * FROM employee_regulier WHERE heures_travaillees > 3000;

-- 2- Mettez à jour le salaire de base de tous les employés réguliers en augmentant de 10%

        UPDATE employee_regulier SET salaire_base_mensuel = salaire_base_mensuel * 1.1;

-- 3- Supprimez tous les gestionnaires dont le bonus annuel est inférieur à 5000
    
        DELETE FROM gestionnaire WHERE bonus_annuel < 5000;

-- 4- Sélectionnez le salaire mensuel moyen de tous les cadres supérieurs

        SELECT AVG(salaire_base) AS salaire_mensuel_moyen FROM cadre_superieur;

-- 5- Sélectionnez les noms des employés et leurs salaires mensuels triés par ordre décroissant de salaire

        SELECT nom, salaire_base_mensuel FROM employee ORDER BY salaire_base_mensuel DESC;




