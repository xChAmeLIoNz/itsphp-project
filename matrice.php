<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrice</title>
</head>
<body>
    <table border="1">
        <?php
        for($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for($j = 1; $j <= 10; $j++) {
                echo "<td>". $i * $j ."</td>";
            }
            echo "</tr>";
        }       
        ?>
    </table>
    <p style="margin-top: 50px;"><a href="./index.php">Back to menu</a></p>
</body>
</html>