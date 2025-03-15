<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des arguments GET</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
if (!empty($_GET)) {
    echo '<h2>Arguments GET :</h2>';
    echo '<table>';
    echo '<tr><th>Argument</th><th>Valeur</th></tr>';

    foreach ($_GET as $key => $value) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($key) . '</td>';
        echo '<td>' . htmlspecialchars($value) . '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo '<p>Aucun argument GET trouvé.</p>';
}
?>

</body>
</html>