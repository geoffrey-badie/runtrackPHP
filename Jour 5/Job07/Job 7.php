<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire PHP</title>
</head>
<body>
    <form method="post" action="">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str" required>
        <br>
        <label for="transformation">Transformation :</label>
        <select id="transformation" name="transformation">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <br>
        <input type="submit" value="Valider">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST['str'];
        $transformation = $_POST['transformation'];

        function gras($str) {
            $words = explode(' ', $str);
            foreach ($words as &$word) {
                if (ctype_upper($word[0])) {
                    $word = "<strong>$word</strong>";
                }
            }
            return implode(' ', $words);
        }

        function cesar($str, $shift = 2) {
            $result = '';
            for ($i = 0; $i < strlen($str); $i++) {
                $char = $str[$i];
                if (ctype_alpha($char)) {
                    $ascii = ord(ctype_upper($char) ? 'A' : 'a');
                    $char = chr($ascii + (ord($char) - $ascii + $shift) % 26);
                }
                $result .= $char;
            }
            return $result;
        }

        function plateforme($str) {
            $words = explode(' ', $str);
            foreach ($words as &$word) {
                if (substr($word, -2) === 'me') {
                    $word = str_replace('me', '_', $word);
                }
            }
            return implode(' ', $words);
        }

        switch ($transformation) {
            case 'gras':
                echo gras($str);
                break;
            case 'cesar':
                echo cesar($str);
                break;
            case 'plateforme':
                echo plateforme($str);
                break;
            default:
                echo "Transformation inconnue.";
        }
    }
    ?>
</body>
</html>