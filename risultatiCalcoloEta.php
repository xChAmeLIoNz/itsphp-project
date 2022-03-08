<?php
date_default_timezone_set("Europe/London");
$nome = $_POST["fname"];
$cognome = $_POST["lname"];
$annoNascita = ($_POST["annoNascita"]);

echo "<p>Bentornato ".$nome." ".$cognome. ".<br>Il tuo anno di nascita è ".$annoNascita.", quindi hai (circa) ". (date("Y") - $annoNascita)." anni!</p>";
?>
<p style="margin-top: 50px;"><a href="./calcoloEta.php">Back to calcolaEta.php</a></p>
<p style="margin-top: 50px;"><a href="./index.php">Back to menu</a></p>