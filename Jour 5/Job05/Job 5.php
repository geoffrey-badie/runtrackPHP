<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function occurrences($str, $char) {
    // Initialiser un compteur à 0
    $count = 0;

    // Parcourir chaque caractère de la chaîne
    for ($i = 0; $i < strlen($str); $i++) {
        // Si le caractère actuel est égal au caractère recherché
        if ($str[$i] === $char) {
            // Incrémenter le compteur
            $count++;
        }
    }

    // Retourner le nombre total d'occurrences
    return $count;
}

// Exemple d'utilisation
$str = "bonjour tout le monde";
$char = "o";
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurrences($str, $char);
?>
</body>
</html>