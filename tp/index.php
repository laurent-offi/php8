<?php

    require("controller.php");


?>



<!DOCTYPE html>

<html lang="fr">

    <head>
    <title>Mon calendrier automatisé</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

    <form method="post">

        <div class="form">

            <label for="months">Choisissez le mois :</label>

            <select id="months">

                <option>Janvier</option>
                <option>Février</option>
                <option>Mars</option>
                <option>Avril</option>
                <option>Mai</option>
                <option>Juin</option>
                <option>Août</option>
                <option>Septembre</option>
                <option>Novembre</option>
                <option>Décembre</option>

            </select>

            
            <label for="years">Choisissez l'année :</label>

            <select id="years">

            <?php

                for($years = $year; $years >= 1970; $years--) {
                    echo "<option>$years</option>";
                }

            ?>

            </select>

            <button>Accéder</button>
        


        </div>

    </form>

        <div class="title"><?php echo months($month) . " " . $year; ?></div>
        
        <?php 
        
        // On exécute la fonction déclarée dans le fichier controller.php

        calendar($month, $year); 
        
        ?>
    
    </body>






</html>



