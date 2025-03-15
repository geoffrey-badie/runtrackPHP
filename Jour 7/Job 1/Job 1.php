<?php
session_start();

// Initialiser le compteur de visites si ce n'est pas déjà fait
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

// Incrémenter le compteur à chaque visite
$_SESSION['nbvisites']++;

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>
<body>
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>