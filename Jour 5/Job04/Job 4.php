<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Erreur : Division par zéro.";
            }
        case '%':
            if ($nombre2 != 0) {
                return $nombre1 % $nombre2;
            } else {
                return "Erreur : Modulo par zéro.";
            }
        default:
            return "Erreur : Opération non valide.";
    }
}

// Exemple d'utilisation
echo calcule(10, '+', 5); // Affiche 15
echo calcule(10, '-', 5); // Affiche 5
echo calcule(10, '*', 5); // Affiche 50
echo calcule(10, '/', 5); // Affiche 2
echo calcule(10, '%', 3); // Affiche 1
?>
</body>
</html>