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


                <!-- <?php echo $_SESSION['Langue']; ?> -->

                <div class="navbar">
                    <a href="Actualites.php">ACTUALITES</a>
                    <a href="projet.php">PROJET</a>
                    <a href="Temoignage.php">TEMOIGNAGE</a>
                    <a href="EnImage.php">EN IMAGE</a>
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

                <div id="MailleAdmin"></div>

                <div class="HexagonGroupAdmin">
                    <div id="hexagonProject1"></div>
                    <div id="hexagonProject1-1"></div>
                    <h2 id="hexagonProject1-title">Edition Nouvel Article</h2>
                </div>

                <a id="Return" href="Admin.php">Retour</a>

                <form id="Edition">
                    <input type="text" name="titre" placeholder="Le corps du délit">
                    <textarea class="chapo" placeholder="De la séduction à l’humiliation, le cyberharcèlement en question, les instrumentalisations plurielles du corps dans le cadre de cyberviolences. Les échanges privilégiés avec la salle composée d'universitaires ont été très constructifs, nous encourageant à renouveler l'expérience dans le champ des études de genre."></textarea>
                    <input type="text" name="soustitre" placeholder="Sous-Titre">
                    <textarea class="paragraphe" placeholder="Paragraphe..."></textarea>
                    <input type="text" name="lieu" placeholder="10 Esplanade des Antilles - 33607 - PESSAC">
                    <input type="date" name="date">
                    <input type="submit" name="Envoie" value="VALIDER">
                </form>

        </div>
        <br><br><br>

    </body>
</html>