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

    <div class="wrapper">


        <div class="waiter" onclick="WaiterDisapear(this)">
            <div class="waiter-title">
                <div class="glitch">
                    <h1>CyberNeTic</h1>
                    <h1>CyberNeTic</h1>
                    <h1>CyberNeTic</h1>
                </div>
            </div>

            <p id="date"></p>


    </div>

    

        
                <div class="navbar">
                    <a href="Redirection.php">ACTUALITES</a>
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

                <div id="MailleHome1"></div>

                <div class="About">

                    <p> En partenariat avec la Gendarmerie Nationale, le projet CyberNeTic vise à mener une recherche-action au coeur des sciences
                        de l'information et de la communication pour étudier les formes d'expression de la violence au moyen des nouvelles
                        technologies et tout particulièrement celle du cyberharcèlement. Il s'agit d'analyser les discours d'expériences
                        (victimes, enquêteurs) et les échanges de conversations (sms, réseaux sociaux, mails, etc.), afin d'indentifier 
                        les phénomène d'engrenage, les stratégies d'influence et de manipulation enclenchés par les prédateurs. </p>

                    <a href="projet.php" class="More">En savoir plus</a>

                </div>

                <div id="UselessBar"></div>
                

                <div class="HexagonGroupHome1">
                    <div id="hexagonHome1"></div>
                    <div id="hexagonHome2"></div>
                    <h3 id="hexagonHome1-title">LE PROJET</h3>
                </div>


                <div class="Actuality"> <h2>ACTUALITES</h2> </div>

                <div class="LastActu">
                    <div id="LastActu1">
                        <img src="style/Assets/Temp.jpeg" style="width: 100%;">
                        <h3> Lorem Ipsum </h3>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum. </p>
                        <a href="#"><i class="fas fa-globe-europe"></i> Lieu </a>
                        <p class="ActuDate"><i class="far fa-clock"> 03.06.19</i>
                    </div>

                    <div id="LastActu2">
                        <img src="style/Assets/Temp.jpeg" style="width: 100%;">
                        <h3> Lorem Ipsum </h3>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum. </p>
                        <a href="#"><i class="fas fa-globe-europe"></i> Lieu </a>
                        <p class="ActuDate"><i class="far fa-clock"> 03.06.19</i>
                    </div>

                    <div id="LastActu3">
                        <img src="style/Assets/Temp.jpeg" style="width: 100%;">
                        <h3> Lorem Ipsum </h3>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum. </p>
                        <a href="#"><i class="fas fa-globe-europe"></i> Lieu </a>
                        <p class="ActuDate"><i class="far fa-clock"> 03.06.19</i>
                    </div>
                </div>

                <div class="ActuMore"><a href="Redirection.php" class="More">EN VOIR PLUS</a></div>



                <div id="MailleHome2"></div>

                <div class="Partner"> <h2>NOS PARTENAIRES</h2> </div>

                <div id="MailleHome3"></div>

                <div class="HexagonGroupHome2">
                    <img class="hexagonHome3" src="style/Assets/Logo-GN.svg">
                    <div class="hexagonHome4"></div>
                    <div id="hexagonHome5"></div>
                </div>

                <div class="HexagonGroupHome3">
                    <img class="hexagonHome3" src="style/Assets/Logo_Orange.jpg" style="padding: 40px;">
                    <div class="hexagonHome4"></div>
                    <div id="hexagonHome6"></div>
                </div>

                <div class="HexagonGroupHome4">
                    <img class="hexagonHome3" src="style/Assets/Logo-UB.jpg" style="padding: 0px;">
                    <div class="hexagonHome4"></div>
                    <div id="hexagonHome7"></div>
                </div>



    </div>

</body>

<script>

    function WaiterDisapear(x) {
        x.classList.add("disapear");
        document.body.style.overflow = 'scroll';
    }

</script>

<script src="js/countdown.js"></script>

</html>