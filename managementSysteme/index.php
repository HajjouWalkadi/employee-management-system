<?php
require_once 'classes/Employe.php';
require_once 'classes/EmployeRegulier.php';
require_once 'classes/Gestionnaire.php';
require_once 'classes/CadreSuperieur.php';

$employeRegulier = new EmployeRegulier();
$employeRegulier->salaire(20);

$gestionnaire = new Gestionnaire();
$gestionnaire->salaire(1200);


$cadreSuperieur = new CadreSuperieur();
$cadreSuperieur->salaire(120000);

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



