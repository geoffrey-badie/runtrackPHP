<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Style</title>
    <?php
    // Vérifie si le formulaire a été soumis
    if (isset($_POST['style'])) {
        $selectedStyle = htmlspecialchars($_POST['style']);
        echo "<link rel='stylesheet' type='text/css' href='$selectedStyle.css'>";
    }
    ?>
</head>
<body>
    <form method="post" action="">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
        <button type="submit">Appliquer le style</button>
    </form>
</body>
</html>