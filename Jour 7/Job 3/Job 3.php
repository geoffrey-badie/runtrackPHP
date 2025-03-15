<?php
session_start();

// Vérifie si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Ajoute le prénom à la variable de session
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

// Vérifie si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialise la liste des prénoms
    $_SESSION['prenoms'] = [];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de prénoms</title>
</head>
<body>
    <h1>Ajouter un prénom</h1>
    <form method="post" action="">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <button type="submit" name="submit">Ajouter</button>
        <button type="submit" name="reset">Réinitialiser</button>
    </form>

    <h2>Liste des prénoms :</h2>
    <ul>
        <?php
        // Affiche les prénoms stockés dans la session
        if (isset($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li>$prenom</li>";
            }
        }
        ?>
    </ul>
</body>
</html>