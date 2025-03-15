<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des arguments POST</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST)) {
        echo '<h2>Arguments POST et leurs valeurs :</h2>';
        echo '<table>';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';

        foreach ($_POST as $key => $value) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($key) . '</td>';
            echo '<td>' . htmlspecialchars($value) . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<p>Aucun argument POST trouvé.</p>';
    }
} else {
    echo '<p>Veuillez soumettre le formulaire pour voir les arguments POST.</p>';
}
?>

<form method="post" action="">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom"><br><br>
    <label for="email">Email :</label>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" value="Soumettre">
</form>

</body>
</html>