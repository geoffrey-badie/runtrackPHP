<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$str = "Les choses que l'on possede finissent par nous posseder";

$length = strlen($str);

for ($i = $length - 1; $i >= 0; $i--) {
    echo $str[$i];
}

?>
</body>
</html>