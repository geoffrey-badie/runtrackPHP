<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (!empty($_GET)) {
        // Affiche le nombre d'arguments GET
        echo "Nombre d'arguments GET : " . count($_GET);
    } else {
        echo "Aucun argument GET trouvé.";
    }
    ?>
</body>
</html>