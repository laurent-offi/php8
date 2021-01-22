<?php

  $target_date = date("d/m/Y");
  $date_explode = explode("/", $target_date);
  $day = $date_explode[0];
  $month = $date_explode[1];
  $year = $date_explode[2];
   
  $newTimestamp = mktime(12,0,0,$month,$day,$year);

  $Day = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
   
   
  $Month = array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");


?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 3 (8) PHP</title>
	</head>

	<body>
		<?php echo $Day[date("n", $newTimestamp)] . " " . $day . " " . $Month[date("n", $newTimestamp)] . " " . $year; ?>
	</body>


</html>