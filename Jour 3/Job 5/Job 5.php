<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    "consonnes" => 0,
    "voyelles" => 0
];

$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];

foreach (str_split(strtolower($str)) as $char) {
    if (ctype_alpha($char)) {
        if (in_array($char, $voyelles)) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

echo '<table border="1">';
echo '<thead>';
echo '<tr><th>Voyelles</th><th>Consonnes</th></tr>';
echo '</thead>';
echo '<tbody>';
echo '<tr><td>' . $dic["voyelles"] . '</td><td>' . $dic["consonnes"] . '</td></tr>';
echo '</tbody>';
echo '</table>';
?>
</body>
</html>