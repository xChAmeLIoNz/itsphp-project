<table border = "1">
    <?php
    $contatore = 33;
    for($i=1; $i <= 14; $i++) {
        echo "<tr>";
        for($n=1; $n <=16; $n++) {
            
            echo "<td>".chr($contatore)."</td>";
            $contatore++;           
        }
        echo "</tr>";
    }
    ?>
</table>
<p>Esercizio: stampa in una tabella i primi 255 caratteri ASCII, evitando i primi 32 e usando la funzione chr()</p>
<p style="margin-top: 50px;"><a href="./index.php">Back to menu</a></p>

