<?php



$array = array(rand(), rand(), rand(), rand(), rand());
echo "<p>Element 0: " . $array[0] . "</p>";
echo "<p>Element 1: " . $array[1] . "</p>";
echo "<p>Element 2: " . $array[2] . "</p>";
echo "<p>Element 3: " . $array[3] . "</p>";
echo "<p>Element 4: " . $array[4] . "</p>";

$somma = 0;
for($i = 0; $i < count($array); $i++) {
    $somma += $array[$i];
}

echo "<p>Somma degli elementi dell'array: " .$somma . "</p>";

/*
function somma($array) {
    if(isset($array)) {
        for($i = 0; $i < count($array); $i++) {
            $somma = 0;
            $somma += $array[$i];
        }
    }
    return $somma;
}

echo somma($array);
*/
?>

