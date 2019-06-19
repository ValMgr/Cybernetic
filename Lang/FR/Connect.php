<?php 
    include '../../Files/Connect/db_connection.php';
    include '../../Files/Connect/connection_check.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CyberNeTic</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../../style/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../../style/mainResponsive.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../../style/hexagon.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
    <body>

        <div class="wrapper">

                <?php include 'NAVBAR.php'; ?>


                <div class="HexagonGroupConnect">
                    <div id="hexagonProject1"></div>
                    <div id="hexagonProject1-1"></div>
                    <h2 id="hexagonProject1-title">Connexion Admin</h2>
                </div>

                <div id="connection">
                    <form action="../../Files/Connect/Connection.php" method="post">
                        <input type="text" name="Username" placeholder="Identifiant"></input>
                        <input type="password" name="Password" placeholder="Mot de passe"></input>
                        <input type="submit" name="Submit" value="Se Connecter">
                    </form>
                </div>

                

                

        </div>

    </body>
</html>
