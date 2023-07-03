<?php
require_once 'classes/Employe.php';
require_once 'classes/EmployeRegulier.php';
require_once 'classes/Gestionnaire.php';
require_once 'classes/CadreSuperieur.php';
require_once '../database/connexion.php';

// Create a database connection
$database = new Database();
$conn = $database->connectPDO();

// Create instances of employee types and set the salaries
$employeRegulier = new EmployeRegulier();
$employeRegulier->salaire(20);

$gestionnaire = new Gestionnaire();
$gestionnaire->salaire(1200);

$cadreSuperieur = new CadreSuperieur();
$cadreSuperieur->salaire(120000);



$stmt = $conn->prepare("INSERT INTO employee (nom, salaire_base_mensuel) VALUES (:nom, :salaire_base_mensuel)");
$stmt->execute([
    'nom' => 'Employee Name', 
    'salaire_base_mensuel' => 80000 
]);

$employeeId = $conn->lastInsertId();

//employee_regulier
$stmt = $conn->prepare("INSERT INTO employee_regulier (id, heures_travaillees) VALUES (:id, :heures_travaillees)");
$stmt->execute([
    'id' => $employeeId,
    'heures_travaillees' => $employeRegulier->getSalaire()
]);

// gestionnaire
$stmt = $conn->prepare("INSERT INTO gestionnaire (id, salaire_base) VALUES (:id, :salaire_base)");
$stmt->execute([
    'id' => $employeeId,
    'salaire_base' => $gestionnaire->getSalaire()
]);

// cadre_superieur
$stmt = $conn->prepare("INSERT INTO cadre_superieur (id, salaire_annuel) VALUES (:id, :salaire_annuel)");
$stmt->execute([
    'id' => $employeeId,
    'salaire_annuel' => $cadreSuperieur->getSalaire()
]);

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employee management system</title>
</head>
<body>
    <p>Le salaire mensuel de l'employé régulier est: <?php echo $employeRegulier->getSalaire(); ?></p>
	<p>Le salaire mensuel du gestionnaire est: <?php echo $gestionnaire->getSalaire(); ?></p>
	<p>Le salaire mensuel du cadre supérieur est: <?php echo $cadreSuperieur->getSalaire(); ?></p>

</body>
</html>



