<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo1p6</title>
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
            <a href="index.php?nom=Nemare&prenom=Jean"><button>Afficher</button></a><br/>
            <?php
            if (isset($_GET['prenom']) && isset($_GET['nom'])) { // On a le nom et le prénom
                echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
            } else { // Il manque des paramètres, on avertit le visiteur
                echo 'Il faut renseigner un nom et un prénom !';
            }
            ?>
        </div>
    </body>
</html>