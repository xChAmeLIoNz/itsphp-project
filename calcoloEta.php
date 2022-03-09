<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcola la tua età</title>
</head>

<body>
    <div class="container">
        <form action="risultatiCalcoloEta.php" method="post">
            <p>Nome: <input type="text" name="fname"></p>
            <p>Cognome: <input type="text" name="lname"></p>
            <p>Data di nascita: <input type="text" name="dataNascita"></p>
            <input class="sub" type="submit" value="Calcola">
        </form>
    </div>

    <style>
        .container {
            width: 300px;
            /*clear: both;*/
        }

        .container input {
            width: 100%;
            /*clear: both;*/
        }

        input.sub {
            width: 30%;
        }
    </style>
    <p>Esercizio: costruire un form HTML che richiami la pagina PHP che calcola l'età di una persona, passando come parametro la data di nascita</p>
    <p style="margin-top: 50px;"><a href="./index.php">Back to menu</a></p>
</body>

</html>