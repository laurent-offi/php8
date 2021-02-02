<?php


    $date1 = strtotime("2016-03-01 00:00:00");
    $date2 = strtotime("2016-02-01 00:00:00");
    $datediff = $date1 - $date2;
?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 6 (8) PHP</title>
	</head>

	<body>
		Il y a <b><?php echo round($datediff / (60 * 60 * 24)); ?></b> jours dans le mois de février 2016.
	</body>


</html>