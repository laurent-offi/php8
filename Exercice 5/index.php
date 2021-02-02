<?php

  $now = time();
	$your_date = strtotime("2016-08-02 15:00:00");
    $datediff = $now - $your_date;

		echo "Nombre de jours : " . round($datediff / (60 * 60 * 24));

?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 5 (8) PHP</title>
	</head>

	<body>

	</body>


</html>