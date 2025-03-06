<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  $col = 'type,nom,valeur';
  $value = array(
                    array('Couleur'=>'Rouge', 'Taille'=>'Medium'),
                    array('Couleur'=>'Vert', 'Taille'=>'Large')
                    );
  echo utilHtmlTable($col, $value);

    ?>
</body>
</html>