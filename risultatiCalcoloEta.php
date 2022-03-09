<?php
date_default_timezone_set("Europe/London");
$nome = $_POST["fname"];
$cognome = $_POST["lname"];
$dataNascita = ($_POST["dataNascita"]);
$oggi = date_create(date("Y"));
if(isset($dataNascita)) {
    $dob = date_create($dataNascita);
    $age = date_diff($oggi, $dob)->y;
    //echo "la tua età ". $age;
}
echo "<p>Bentornato ".$nome." ".$cognome. ".<br>La tua data di nascita è ".$dataNascita.", quindi hai  ". $age." anni!</p>";
//echo "<p>Bentornato ".$nome." ".$cognome. ".<br>Il tuo anno di nascita è ".$annoNascita.", quindi hai (circa) ". (date("Y") - $annoNascita)." anni!</p>";
?>
<p style="margin-top: 50px;"><a href="./calcoloEta.php">Back to calcolaEta.php</a></p>
<p style="margin-top: 50px;"><a href="./index.php">Back to menu</a></p>