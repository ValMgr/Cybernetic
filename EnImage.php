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
                    <a href="Actualites.php">ACTUALITES</a>
                    <a href="projet.php">PROJET</a>
                    <a href="Temoignage.php">TEMOIGNAGE</a>
                    <a id="select" href="EnImage.php">EN IMAGE</a>
                    <a href="Redirection.php">RESSOURCES</a>
                    <a href="index.php"><i class="fas fa-home"></i></a>
                    <a href="#"><i class="fas fa-search"></i></a>
                    <div id="LangDropdown"><img src="style/Assets/Icon/france.svg">
                        <div id="LangDropdown-content">
                            <img src="style/Assets/Icon/spain.svg" class="LangDropdown-content">
                            <img src="style/Assets/Icon/united-kingdom.svg" class="LangDropdown-content">
                        </div>
                    </div>
                </div>

                <div id="MailleCategories1"></div>

                <div class="HexagonGroupProject1">
                    <div id="hexagonProject1"></div>
                    <div id="hexagonProject1-1"></div>
                    <h2 id="hexagonProject1-title">CyberNeTic en image</h2>
                </div>

                <div class="ListCategories1">
                    <div id="Categorie1">
                        <a href="#"><img src="style/Assets/Flamming.jpg" style="width: 100%; border-radius: 5px;"></a>
                        <!-- <h3>FLAMMING</h3> -->
                    </div>

                    <div id="Categorie2">
                        <a href="#"><img src="style/Assets/Nudes.jpg" style="width: 100%; border-radius: 5px;"></a>
                        <!-- <h3>NUDES</h3> -->
                    </div>
                </div>

                <div class="ListCategories2">
                    <div id="Categorie3">
                        <a href="#"><img src="style/Assets/RevengePorn.jpg" style="width: 100%; border-radius: 5px;"></a>
                        <!-- <h3>REVENGE PORN</h3> -->
                    </div>

                    <div id="Categorie4">
                        <a href="#"><img src="style/Assets/Sextos.jpg" style="width: 100%; border-radius: 5px;"></a>
                        <!-- <h3>SEXTOS</h3> -->
                    </div>
                </div>

                <div class="ListCategories3">
                    <div id="Categorie5">
                        <a href="#"><img src="style/Assets/Usurpation.jpg" style="width: 100%; border-radius: 5px;"></a>
                        <!-- <h3>USURPATION D'IDENTITE</h3> -->
                    </div>

                    <div id="Categorie6">
                        <a href="#"><img src="style/Assets/Cyberstalking.jpg" style="width: 100%; border-radius: 5px;"></a>
                        <!-- <h3>CYBERSTALKING</h3> -->
                    </div>
                </div>

                <div id="MailleActus2"></div>

        </div>

    </body>
</html>