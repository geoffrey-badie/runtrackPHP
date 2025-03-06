<?php
    $numbers = [200, 204, 173, 98, 404, 459];
    print_r ($numbers);
    echo "<br>";
    foreach ($numbers as $number)
    {
    if ($number %2 == 0){
        echo "La valeur $number est paire.<br>";
    }
    else
    {
        echo "La valeur $number est impaire.<br>";
    }
}
?>