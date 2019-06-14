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
                    <a id="select" href="#">TEMOIGNAGE</a>
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

                <div id="MailleTemoignage1"></div>

                <div class="HexagonGroupProject1 HexagonGroupTemoignage1">
                    <div id="hexagonProject1"></div>
                    <div id="hexagonProject1-1"></div>
                    <h2 id="hexagonProject1-title">Témoignage</h2>
                </div>

                <div id="connexion">
                    <form id=Temoignage>
                        <input type="text" name="NomPrenom" placeholder=" Nom & Prénom">
                        <input type="mail" name="EMail" placeholder=" Email">
                        <input type="tel" name="Phone" placeholder=" Téléphone">
                        <input type="text" name="Topic" placeholder=" Sujet du témoignage">
                        <textarea name="MainSubject"></textarea>
                        <label for="Files">Choisissez 1 ou plusieurs fichiers "Preuve" :</label>
                        <input type="file" name="Files" accept="image/png, image/jpeg, image/jpg" multiple="multiple">
                        <input type="submit" name="Envoi" value="VALIDER">
                    </form>
                </div>

                <id id="Icons">
                    <img src="style/Assets/iconid.png"></img>
                    <img src="style/Assets/iconmail.png"></img>
                    <img src="style/Assets/icontel.png"></img>
                    <img src="style/Assets/icontopic.png"></img>
                </id>
                <img class="iconmsg" src="style/Assets/iconmessage.png"></img>
                <!-- <img class="iconupload" src="style/Assets/iconupload.png"></img> -->

                <div id="Infos">
                    <h3>POUR PLUS DE QUESTIONS OU D'INFORMATIONS</h3>
                    <a href="#">adressemail@gmail.com</a>
                </div>


        </div>

    </body>
</html>