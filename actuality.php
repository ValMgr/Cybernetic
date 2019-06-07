<?php 
    //include 'Files/Connect/db_connection.php';
    //include 'Files/Connect/connection_check.php';
    //include 'Files/Language/LanguageManager.php';

    session_start();

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

        <div class="wrapper">

                <div class="navbar">
                    <a id="select" href="Actualites.php">ACTUALITES</a>
                    <a href="projet.php">PROJET</a>
                    <a href="Redirection.php">TEMOIGNAGE</a>
                    <a href="Redirection.php">EN IMAGE</a>
                    <a href="Redirection.php">RESSOURCES</a>
                    <a href="Redirection.php">CONTACT</a>
                    <a href="index.php"><i class="fas fa-home"></i></a>
                    <a href="#"><i class="fas fa-search"></i></a>
                    <div id="LangDropdown"><img src="style/Assets/Icon/france.svg">
                        <div id="LangDropdown-content">
                            <img src="style/Assets/Icon/spain.svg" class="LangDropdown-content">
                            <img src="style/Assets/Icon/united-kingdom.svg" class="LangDropdown-content">
                        </div>
                    </div>
                </div>

                <div id="MailleActus1"></div>

                <div class="HexagonGroupProject1">
                    <div id="hexagonProject1"></div>
                    <div id="hexagonProject1-1"></div>
                    <h2 id="hexagonProject1-title">Actualités</h2>
                </div>

                <div class="ListActus1">
                    <div id="Actu1">
                        <img src="style/Assets/Actu1.jpg" style="width: 100%;">
                        <h3> Le corps du délit </h3>
                        <p> De la séduction à l’humiliation, le cyberharcèlement en question, les instrumentalisations plurielles du corps dans le cadre de cyberviolences.</p>
                        <a href="#"><i class="fas fa-globe-europe"></i> Lieu </a>
                        <p class="ActuDate"><i class="far fa-clock"> 11.03.19</i>
                    </div>

                    <div id="Actu2">
                        <img src="style/Assets/Actu2.jpg" style="width: 100%;">
                        <h3 class="longtitle"> Dark net & cybercriminalité</h3>
                        <p>Le hacking au secours des organisations dans le cadre du programme de recherche CyberNeTic.</p>
                        <a href="#"><i class="fas fa-globe-europe"></i> Lieu </a>
                        <p class="ActuDate"><i class="far fa-clock"> 29.03.19</i>
                    </div>

                    <div id="Actu3">
                        <img src="style/Assets/Actu3.jpg" style="width: 100%;">
                        <h3 class="longtitle"> Stratégies amoureuses & cyberharcèlement </h3>
                        <p>Quand le discours manipulateur devient un crime de langue sur les réseaux sociaux. <br><br> </p>
                        <a href="#"><i class="fas fa-globe-europe"></i> Lieu </a>
                        <p class="ActuDate"><i class="far fa-clock"> 19.04.19</i>
                    </div>
                </div>
                <div class="ListActus2">
                    <div id="Actu4">
                        <img src="style/Assets/Actu4.jpg" style="width: 100%;">
                        <h3> Lorem Ipsum </h3>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum. <br><br></p>
                        <a href="#"><i class="fas fa-globe-europe"></i> Lieu </a>
                        <p class="ActuDate"><i class="far fa-clock"> 03.06.19</i>
                    </div>

                    <div id="Actu5">
                        <img src="style/Assets/Actu5.jpg" style="width: 100%;">
                        <h3> Lorem Ipsum </h3>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum. <br><br></p>
                        <a href="#"><i class="fas fa-globe-europe"></i> Lieu </a>
                        <p class="ActuDate"><i class="far fa-clock"> 03.06.19</i>
                    </div>

                    <div id="Actu6">
                        <img src="style/Assets/Actu6.jpg" style="width: 100%;">
                        <h3> Lorem Ipsum </h3>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum. <br><br></p>
                        <a href="#"><i class="fas fa-globe-europe"></i> Lieu </a>
                        <p class="ActuDate"><i class="far fa-clock"> 03.06.19</i>
                    </div>
                </div>

                <div class="ActusMore"><a href="Redirection.php" class="MoreActus">Afficher plus</a></div>

                <div id="MailleActus2"></div>

        </div>

    </body>
</html>