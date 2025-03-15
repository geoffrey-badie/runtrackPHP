<?php
function bubblesort($tab, $croissant) {
    $n = count($tab);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if (($croissant && strcmp($tab[$j], $tab[$j + 1]) > 0) || (!$croissant && strcmp($tab[$j], $tab[$j + 1]) < 0)) {
                // Échanger les éléments
                $temp = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $temp;
            }
        }
    }
    return $tab;
}

// Exemple d'utilisation
$tab = ["abc", "ghi", "def"];
$croissant = true;
$resultat = bubblesort($tab, $croissant);
print_r($resultat); // Affiche : Array ( [0] => abc [1] => def [2] => ghi )

$croissant = false;
$resultat = bubblesort($tab, $croissant);
print_r($resultat); // Affiche : Array ( [0] => ghi [1] => def [2] => abc )
?>