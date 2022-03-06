
<table border = "1">
<tr ><th> Personaggio </th> </tr>
<?php
$pers = array (" pippo " ," pluto " ,"paperino" ," topolino " );
foreach ( $pers as $nome ) {
    if(strpos($nome, 'paperino') !== false) {
        echo " <tr><td> $nome </td></tr>\n";
    }
}
?>
</table>
<p style="margin-top: 50px;"><a href="./index.php">Back to menu</a></p>

