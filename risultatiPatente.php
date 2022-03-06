<?php
echo " <p> Passami a prendere ";
if (!isset($_POST["patenti"])) {
echo "a piedi </p>";
}
else if(in_array("B", $_POST["patenti"])) {
echo "in macchina </p>";
}
else if(in_array("A", $_POST["patenti"])) {
echo "in moto </p>";
}
?>
<p style="margin-top: 50px;"><a href="./patenti.php">Back to patenti</a></p>
<p style="margin-top: 10px;"><a href="./index.php">Back to menu</a></p>