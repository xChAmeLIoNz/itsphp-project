<table border="1" class="centra">
<?php
$contatore = 1;
for($i = 0; $i < 5; $i++) {
    echo "<tr>";
    for($j = 0; $j < 4; $j++) {
        echo "<td class='cella'>$contatore</td>";
        $contatore++;
    }
    echo "</tr>";
}
?>
</table>
<br>
<p>Esercizio: scrivere uno script PHP che produca in output numeri da 1 a 20 disposti in 5 righe e in 4 colonne</p>
<p style="margin-top: 50px;"><a href="./index.php">Back to menu</a></p>

<style>
    .cella {
        padding: 0px 20px;
        text-align: center;
    }

    .centra {
        margin: 0px auto;
    }
</style>