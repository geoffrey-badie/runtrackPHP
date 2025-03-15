<?php
// Vérifie si le cookie "nbvisites" existe
if (isset($_COOKIE['nbvisites'])) {
    // Si oui, incrémente sa valeur de 1
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    // Sinon, initialise le compteur à 1
    $nbvisites = 1;
}

// Met à jour le cookie avec la nouvelle valeur
setcookie('nbvisites', $nbvisites, time() + (365 * 24 * 3600)); // Expire dans 1 an

// Vérifie si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialise le cookie à 0
    setcookie('nbvisites', 0, time() + (365 * 24 * 3600)); // Expire dans 1 an
    // Redirige pour éviter de soumettre le formulaire à nouveau
    header("Refresh:0");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>
<body>
    <p>Nombre de visites : <?php echo $nbvisites; ?></p>
    <form method="post">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>