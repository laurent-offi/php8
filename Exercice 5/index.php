<?php

$date1 = strtotime($date1);
$date2 = strtotime($date2);
 
// On récupère la différence de timestamp entre les 2 précédents
$nbJoursTimestamp = $date2 - $date1;
 
// ** Pour convertir le timestamp (exprimé en secondes) en jours **
// On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
$nbJours = $nbJoursTimestamp/86400; // 86 400 = 60*60*24
 
echo "Nombre de jours : ".$nbJours;

?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 5 (8) PHP</title>
	</head>

	<body>

	</body>


</html>