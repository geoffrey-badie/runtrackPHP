<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$str = "I'm sorry Dave I'm afraid I can't do that";

$voyelles = "";

for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]);
    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u' || $char == 'y') {        
        $voyelles .= $str[$i];
    }
}

echo "Les voyelles dans la chaîne sont : " . $voyelles;
?>
</body>
</html>