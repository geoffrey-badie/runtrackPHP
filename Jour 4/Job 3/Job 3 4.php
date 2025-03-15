<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Vérifie si la méthode de requête est POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Compte le nombre d'arguments POST
    $nombreArguments = count($_POST);

    // Affiche le nombre d'arguments POST
    echo "Le nombre d'arguments POST est : " . $nombreArguments;
} else {
    echo "Aucune donnée POST reçue.";
}
?>
</body>
</html>