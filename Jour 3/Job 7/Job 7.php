<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais";

$chars = str_split($str);

$lastChar = $chars[count($chars) - 1]; 
for ($i = count($chars) - 1; $i > 0; $i--) {
    $chars[$i] = $chars[$i - 1];
}
$chars[0] = $lastChar; 

$newStr = implode('', $chars);

echo $newStr;

?>
</body>
</html>