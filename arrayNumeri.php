<?php

$num1 = rand(1, 100);
$num2 = rand(1, 100);
$num3 = rand(1, 100);
$num4 = rand(1, 100);
$num5 = rand(1, 100);
$num6 = rand(1, 100);

$array = [$num1, $num2, $num3, $num4, $num5, $num6];

for($i = 0; $i < count($array); $i++) {
    echo "<p>Il numero estratto è: " . $array[$i] . "</p>";
}
echo "<br>";
echo "<p>Il massimo dei numeri è: " . max($array) . "</p>";
echo "<p>Il minimo dei numerì è: " . min($array) . "</p>";
echo "<p>La somma dei numeri è: " . array_sum($array) . "</p>";
echo "<p>La media dei numeri è: " . $average = array_sum($array)/count($array) . "</p><br>";
?>
<p>Esercizio: carica in un array i numeri estratti e calcola il minimo, il massimo, la somma totale e la media di tutti i numeri presenti nell'array</p>
<p style="margin-top: 50px;"><a href="./index.php">Back to menu</a></p>