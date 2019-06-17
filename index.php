<?php 
    include 'Files/Connect/db_connection.php';
    include 'Files/Connect/connection_check.php';
    //include 'Files/Language/LanguageManager.php';

    if (!isset($_SESSION['Langue'])) {
    	$_SESSION['Langue'] = 'FRA01';
    }

    
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
<body style="overflow: hidden;">


    <?php

        switch ($_SESSION['Langue']) {
            case 'FRA01':
                include 'Lang/FR/index.php';
                break;

            case 'ENG01':
                include 'Lang/ENG/index.php';
                break;

            case 'ESP01':
                include 'Lang/ESP/index.php';
                break;
            
            default:
                include 'Lang/FR/index.php';
                break;
        }
    
        ?>



 

</body>

<script>

    function WaiterDisapear(x) {
        x.classList.add("disapear");
        document.body.style.overflow = 'scroll';
    }



</script>

<script src="js/countdown.js"></script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>

</html>