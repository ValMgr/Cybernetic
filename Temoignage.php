  <?php 
    include 'Files/Connect/db_connection.php';
    include 'Files/Connect/connection_check.php';


     ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CyberNeTic - Témoignage</title>
    <link rel="shortcut icon" href="style/Assets/cybernetic.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" media="screen" href="style/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/mainResponsive.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/hexagon.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/hexagonResponsive.css" />
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

                <div class="HexagonGroupTemoignage1 HexagonGroupProject1">
                    <div id="hexagonProject1"></div>
                    <div id="hexagonProject1-1"></div>
                    <h2 id="HexagonGroupTemoignage1-title">Témoignage</h2>
                </div>

                <div id="connexion">
                    <form id=Temoignage>
                        <input type="text" required name="NomPrenom" placeholder=" Nom & Prénom / Pseudonyme">
                        <input type="mail" required name="EMail" placeholder=" Email">
                        <input type="text" required name="Topic" placeholder=" Sujet du témoignage">
                        <textarea name="MainSubject" required placeholder="Rédigez votre témoignage ici..."></textarea>
                        <label for="Files">Veuillez sélectionner les captures d'écrans & images appuyant vos propos...</label>
                        <input type="file" required name="Files" accept="image/png, image/jpeg, image/jpg" multiple="multiple">
                        <input class="checkbox1" type="checkbox" required name="terms"><label class="check" for="terms">Je certifie avoir pris connaissance des <u><a href="Cybernetic-ML.html" style="text-decoration: none; color: #174691;" target="_blank">Mentions Légales</a></u>.</label>
                        <input class="checkbox2" type="checkbox" required name="csmt"><label class="check" for="csmt">En soumettant ce formulaire, j'accepte que les informations saisies soient traîtées dans le cadre de recherche du projet <font color="#03AFA8">CyberNeTic</font>.</label>
                        <input type="submit" name="Envoi" value="VALIDER">
                    </form>
                </div>

                <id id="Icons">
                    <img src="style/Assets/iconid.png"></img>
                    <img src="style/Assets/iconmail.png"></img>
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


<script src="js/particles.js"></script>
<!-- <script src="js/app.js"></script> -->


</html>

