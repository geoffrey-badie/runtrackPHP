<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function convertToLeetSpeak($string) {
    // Tableau de correspondance des lettres en leet speak
    $leetMap = [
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'I' => '1', 'i' => '1',
        'O' => '0', 'o' => '0',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];

    // Remplacer chaque lettre par sa correspondance en leet speak
    $leetString = strtr($string, $leetMap);

    return $leetString;
}

// Exemple d'utilisation
$originalString = "Hello, World!";
$leetString = convertToLeetSpeak($originalString);
echo $leetString; // Affiche "H3ll0, W0rld!"
?>
</body>
</html>