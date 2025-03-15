<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Maison</title>
    <style>
        .maison {
            border: 1px solid black;
            margin-top: 20px;
        }
        .toit {
            width: 0;
            height: 0;
            border-left: 50px solid transparent;
            border-right: 50px solid transparent;
            border-bottom: 50px solid black;
            margin: 0 auto;
        }
        .corps {
            width: 100px;
            height: 100px;
            background-color: lightgray;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h1>Créez votre maison</h1>
    <form method="post" action="">
        <label for="largeur">Largeur :</label>
        <input type="number" id="largeur" name="largeur" required>
        <br>
        <label for="hauteur">Hauteur :</label>
        <input type="number" id="hauteur" name="hauteur" required>
        <br>
        <input type="submit" value="Afficher la maison">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $largeur = intval($_POST['largeur']);
        $hauteur = intval($_POST['hauteur']);

        echo '<div class="maison">';
        echo '<div class="toit" style="border-left-width: ' . ($largeur / 2) . 'px; border-right-width: ' . ($largeur / 2) . 'px; border-bottom-width: ' . ($hauteur / 2) . 'px;"></div>';
        echo '<div class="corps" style="width: ' . $largeur . 'px; height: ' . $hauteur . 'px;"></div>';
        echo '</div>';
    }
    ?>
</body>
</html>