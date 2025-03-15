<?php
// Vérifie si le formulaire a été soumis
if (isset($_POST['connexion'])) {
    // Récupère le prénom du formulaire et le stocke dans un cookie
    $prenom = $_POST['prenom'];
    setcookie('prenom', $prenom, time() + (86400 * 30), "/"); // Cookie valable 30 jours
    header("Refresh:0"); // Rafraîchit la page pour afficher le message de bienvenue
}

// Vérifie si le bouton de déconnexion a été cliqué
if (isset($_POST['deco'])) {
    // Supprime le cookie
    setcookie('prenom', '', time() - 3600, "/");
    header("Refresh:0"); // Rafraîchit la page pour afficher le formulaire de connexion
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <?php
    // Vérifie si le cookie 'prenom' est défini
    if (isset($_COOKIE['prenom'])) {
        // Affiche le message de bienvenue et le bouton de déconnexion
        echo "Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " !";
        echo '<form method="post">';
        echo '<button type="submit" name="deco">Déconnexion</button>';
        echo '</form>';
    } else {
        // Affiche le formulaire de connexion
        echo '<form method="post">';
        echo '<label for="prenom">Prénom :</label>';
        echo '<input type="text" id="prenom" name="prenom" required>';
        echo '<button type="submit" name="connexion">Connexion</button>';
        echo '</form>';
    }
    ?>
</body>
</html>