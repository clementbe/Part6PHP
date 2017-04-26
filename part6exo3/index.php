<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo3p6</title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="align">
            <a href="../part6exo1/index.php"><button class="button">Exercice 1</button></a>
            <a href="../part6exo2/index.php"><button class="button">Exercice 2</button></a>
            <a href="../part6exo3/index.php"><button class="button">Exercice 3</button></a>
            <a href="../part6exo4/index.php"><button class="button">Exercice 4</button></a>
            <a href="../part6exo5/index.php"><button class="button">Exercice 5</button></a>
            <a href="../part6exo6/index.php"><button class="button">Exercice 6</button></a>
        </div>
        <div class="php">
           <a href="index.php?dateDebut=2/05/2016&dateFin=27/11/2016"><button>Afficher</button></a><br/>
            <?php
            if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])) { // On a les dates
                echo 'Début le ' . $_GET['dateDebut'] . 'et se termine le ' . $_GET['dateFin'] . ' !';
            } else { // Il manque des paramètres, on avertit le visiteur
                echo 'Il faut renseigner un date !';
            }
            ?>
        </div>
    </body>
</html>