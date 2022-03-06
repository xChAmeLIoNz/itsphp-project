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