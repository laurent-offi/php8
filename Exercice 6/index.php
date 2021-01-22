<?php

  $day = date("d/m/Y");
  $change = strtotime($day . '+5 days');

?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 6 (8) PHP</title>
	</head>

	<body>
		Nous étions le <?php echo $change ?> il y a 20 jours.
	</body>


</html>