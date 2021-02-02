<?php

    $month = date("d");
    $year = date("Y");


    function calendar($month, $year) {

        // On vérifie que le mois est bien compris dans une année, sinon, on affiche un message d'erreur

        if($month < 13) {

        // cal_days_in_month — Retourne le nombre de jours dans un mois, pour une année et un calendrier donné

        $numbers_days = cal_days_in_month(CAL_GREGORIAN, $month, $year); ?>

        
	<table>

    <tr class="head">
    <th>Lun</th>
    <th>Mar</th>
    <th>Mer</th>
    <th>Jeu</th>
    <th>Ven</th>
    <th>Sam</th>
    <th>Dim</th>
    </tr>


    <?php 


        for($in_day = 1; $in_day <= $numbers_days; $in_day++) {

            // cal_to_jd — Convertit un calendrier en nombre de jours Julien

            $day = cal_to_jd(CAL_GREGORIAN, $month, $in_day, $year);

            // jddayofweek — Retourne le numéro du jour de la semaine

            $week_day = JDDayOfWeek($day);
        
                if($in_day == $numbers_days) {

                    if($week_day == 1) {

                        echo "<tr>";

                    }

                    echo "<td class='case'>$in_day</td></tr>";

                } else if($in_day == 1) {

                    echo "<tr>";

                    if ($week_day == 0) {

                        $week_day = 7;
                    
                    }

                    for ($k = 1; $k != $week_day; $k++) { 
                           
                        echo "<td></td>";
                       
                    }

                    echo "<td class='case'>$in_day</td>";
        
                    if ($week_day == 7) {
                        
                        echo "</tr>";

                    }
                } else {
                    
                    if ($week_day == 1) {

                        echo "<tr>";

                    }

                    echo "<td class='case'>$in_day</td>";

                    if ($week_day == 0) {

                        echo "</tr>";

                    }

                }

            }

            // On ferme la table

            echo "</table>";
    
        } else {
            echo "Le mois du calendrier ne peut pas être supérieur à 12.";
        }
    }


    // On crée une fonction qui va modifier la date et afficher le mois en lettre
    
    function months($p) {

        $z = $p-1;

        $table = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

        return $table[$z];

    }