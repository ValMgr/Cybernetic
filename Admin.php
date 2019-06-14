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
                    <h2 id="hexagonProject1-title">Espace Administrateur</h2>
                </div>

                <a id="AdminbtnCreate" href="EditNewArticle.php">Nouvel Article</a>

                <h3 class="listadmin">Liste des Articles & Actuaités</h3>


                <div id="AdminList">

                    <div id="AdminActu">
                        <img src="style/Assets/Actu1.jpg" style="width: 35%;">
                        <h3>Le corps du délit</h3>
                        <p> De la séduction à l’humiliation, le cyberharcèlement en question, les instrumentalisations plurielles du corps dans le cadre de cyberviolences. Les échanges privilégiés avec la salle composée d'universitaires ont été très constructifs, nous encourageant à renouveler l'expérience dans le champ des études de genre.</p>
                        <a href="#"><i class="fas fa-globe-europe"></i> Lieu</a>
                        <p class="ActuDate"><i class="far fa-clock"></i> 11.03.19</p><br>
                    </div>
                    <div id="Controles">
                        <a class="AdminbtnModif" href="EditNewArticleExemple.php">Modifier</a>
                        <a class="AdminbtnSupp" onclick="return confirm('Voulez-vous vraiment supprimer l\'article ?')" href="AdminSuppExemple.php">Supprimer</a>
                    </div>

                    <div id="AdminActu">
                        <img src="style/Assets/Actu2.jpg" style="width: 35%;">
                        <h3>Dark net & cybercriminalité</h3>
                        <p>Le hacking au secours des organisations dans le cadre du programme de recherche CyberNeTic! Le colloque international Dark Side a permis de mettre en lumière le partenariat privilégié entre la Gendarmerie Nationale et l’Université Bordeaux Montaigne. Des perspectives de collaboration inédites sont encore à venir…</p>
                        <a href="#"><i class="fas fa-globe-europe"></i> Lieu</a>
                        <p class="ActuDate"><i class="far fa-clock"></i> 29.03.19</p>
                    </div>
                    <div id="Controles">
                        <a class="AdminbtnModif" href="#">Modifier</a>
                        <a class="AdminbtnSupp" onclick="return confirm('Voulez-vous vraiment supprimer l\'article ?')" href="#">Supprimer</a>
                    </div>

                    <div id="AdminActu">
                        <img src="style/Assets/Actu3.jpg" style="width: 35%;">
                        <h3>Stratégies amoureuses & cyberharcèlement</h3>
                        <p>Quand le discours manipulateur devient un crime de langue sur les réseaux sociaux. Notre projet de recherche CyberNeTic nous a permis cette fois-ci d’exposer à l’Université Tunis El Manar, les mécanismes discursifs de la séduction qui structurent les échanges amoureux d’une situation potentiellement constitutive d’un cyberharcèlement. </p>
                        <a href="#"><i class="fas fa-globe-europe"></i> Lieu</a>
                        <p class="ActuDate"><i class="far fa-clock"></i> 19.04.19</p>
                    </div>
                    <div id="Controles">
                        <a class="AdminbtnModif" href="#">Modifier</a>
                        <a class="AdminbtnSupp" onclick="return confirm('Voulez-vous vraiment supprimer l\'article ?')" href="#">Supprimer</a>
                    </div>

                </div>

        </div>
        <br><br><br><br><br>

    </body>
</html>