<?php 
    include '../Connect/db_connection.php';
    include '../Connect/connection_check.php';
     ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CyberNeTic</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/mainResponsive.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/hexagon.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> 

</head>
<body>

    <?php

      
        if (isset($_POST['Username']) AND !empty($_POST['Username']) && isset($_POST['Password']) AND !empty($_POST['Password'])){

                $Checkdb = "SELECT * FROM `users`";
                // print_r($Checkdb);
                // echo ("<br>");

                $Checkdb = $dbPdo->query($Checkdb);
                // print_r($query);
                // echo ("<br>");

                $Result = $Checkdb->fetchAll(); 
                // print_r($Result);

                

                
                
                foreach ($Result as $key => $Rows) {
                        
                    $CheckUsername = $Rows[0];
                    $CheckPassword = $Rows[1];

                    if($CheckUsername == $_POST['Username'] && $CheckPassword == sha1($_POST['Password'])){

                        $_SESSION['Connected'] = true;
                        $_SESSION['Email'] = $Rows[2];
                        header('location: ../../Admin.php');
                        die;
                    }                    
                }

                $_SESSION['Connected'] = false;
                echo '<body onLoad="alert(\'Error, invalid username or password ...\')">';
                echo '<meta http-equiv="refresh" content="0;URL=../../Connect.php">';
                

        }



        ?>




</body>
</html>