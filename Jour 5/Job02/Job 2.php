<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Exemple d'utilisation
#bonjour(true);  // Affiche "Bonjour"
#bonjour(false); // Affiche "Bonsoir"
?>
</body>
</html>