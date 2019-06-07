<?php 
    include 'Files/Connect/db_connection.php';
    include 'Files/Connect/connection_check.php';
    //include 'Files/Language/LanguageManager.php';


    if(!isset($_SESSION['Langue'])){
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
<body>
<body style="overflow: hidden;">

<?php

    if($_SESSION['Langue'] == "FRA01"){ ?>

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

                            <form action="Files/Language/LanguageManager.php" method="post" id="ENG01"><input type="hidden" name="Langue" value="ENG01"></form>
                            <form action="Files/Language/LanguageManager.php" method="post" id="ESP01"><input type="hidden" name="Langue" value="ESP01"></form>

                            <a href="#" onclick="getElementById('ESP01').submit();"><img src="style/Assets/Icon/spain.svg" class="LangDropdown-content"></a>
                            <a href="#" onclick="getElementById('ENG01').submit();"><img src="style/Assets/Icon/united-kingdom.svg" class="LangDropdown-content"></a>
                        </div>
                    </div>
                </div>

                <div id="MailleHome1"></div>

                <div class="About">

                

                    <p> En partenariat avec la Gendarmerie Nationale, le projet CyberNeTic vise à mener une recherche-action au coeur des sciences
                        de l'information et de la communication pour étudier les formes d'expression de la violence au moyen des nouvelles
                        technologies et tout particulièrement celle du cyberharcèlement. Il s'agit d'analyser les discours d'expériences
                        (victimes, enquêteurs) et les échanges de conversations (sms, réseaux sociaux, mails, etc.), afin d'identifier 
                        les phénomènes d'engrenage, les stratégies d'influence et de manipulation enclenchées par les prédateurs. </p>

                    <a href="projet.php" class="More">En savoir plus</a>

                </div>

                <div id="UselessBar"></div>
                

                <div class="HexagonGroupHome1">
                    <div id="hexagonHome1"></div>
                    <div id="hexagonHome1-1"></div>
                    <div id="hexagonHome2"></div>
                    <div id="hexagonHome2-2"></div>
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
                    <img class="hexagonHome3" src="style/Assets/Logo-GN.svg" style="padding: 20px;">
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



    </div> <?php }

            if($_SESSION['Langue'] == "ENG01"){ ?>

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
                    <a href="Redirection.php">ACTUALITY</a>
                    <a href="projet.php">PROJECT</a>
                    <a href="Redirection.php">TESTIMONY</a>
                    <a href="Redirection.php">PICTURES</a>
                    <a href="Redirection.php">RESSOURCES</a>
                    <a href="Redirection.php">CONTACT</a>
                    <a href="index.php"><i class="fas fa-home"></i></a>
                    <a href="#"><i class="fas fa-search"></i></a>
                    <div id="LangDropdown"><img src="style/Assets/Icon/united-kingdom.svg">
                        <div id="LangDropdown-content">
                            <form action="Files/Language/LanguageManager.php" method="post" id="FRA01"><input type="hidden" name="Langue" value="FRA01"></form>
                            <form action="Files/Language/LanguageManager.php" method="post" id="ESP01"><input type="hidden" name="Langue" value="ESP01"></form>

                            <a href="#" onclick="getElementById('FRA01').submit();"><img src="style/Assets/Icon/france.svg" class="LangDropdown-content"></a>
                            <a href="#" onclick="getElementById('ESP01').submit();"><img src="style/Assets/Icon/spain.svg" class="LangDropdown-content"></a>
                        </div>
                    </div>
                </div>

                <div id="MailleHome1"></div>

                <div class="About">

                <?php if($Connected == true){
                    echo "<p>Connected</p>";
                } ?>

                    <p> In partnership with the National Gendarmerie, the CyberNeTic project aims to conduct an action research at the heart of science
                        information and communication to study forms of expression of violence through new
                        technologies and especially cyberharcment. It is a question of analyzing the discourses of experiences
                        (victims, investigators) and exchanges of conversations (sms, social networks, mails, etc.), in order to identify
                        the phenomenon of gearing, strategies of influence and manipulation initiated by predators. </p>

                    <a href="projet.php" class="More">Read more</a>

                </div>

                <div id="UselessBar"></div>
                

                <div class="HexagonGroupHome1">
                    <div id="hexagonHome1"></div>
                    <div id="hexagonHome2"></div>
                    <h3 id="hexagonHome1-title">PROJECT</h3>
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


           <?php }

           if($_SESSION['Langue'] == "ESP01"){ ?>

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
                <a href="Redirection.php">ACTUALIDAD</a>
                <a href="projet.php">VAMOS</a>
                <a href="Redirection.php">A GAÑAR</a>
                <a href="Redirection.php">LOS IMAGES</a>
                <a href="Redirection.php">RESSOURSAS</a>
                <a href="Redirection.php">SI SEÑOR</a>
                <a href="index.php"><i class="fas fa-home"></i></a>
                <a href="#"><i class="fas fa-search"></i></a>
                <div id="LangDropdown"><img src="style/Assets/Icon/spain.svg">
                    <div id="LangDropdown-content">

                        <form action="Files/Language/LanguageManager.php" method="post" id="ENG01"><input type="hidden" name="Langue" value="ENG01"></form>
                        <form action="Files/Language/LanguageManager.php" method="post" id="FRA01"><input type="hidden" name="Langue" value="FRA01"></form>

                        <a href="#" onclick="getElementById('ENG01').submit();"><img src="style/Assets/Icon/united-kingdom.svg" class="LangDropdown-content"></a>
                        <a href="#" onclick="getElementById('FRA01').submit();"><img src="style/Assets/Icon/france.svg" class="LangDropdown-content"></a>
                    </div>
                </div>
            </div>

            <div id="MailleHome1"></div>

            <div class="About">

            

                <p> VAMOS VAMOS En partenariat avec la Gendarmerie Nationale, le projet CyberNeTic vise à mener une recherche-action au coeur des sciences
                    de l'information et de la communication pour étudier les formes d'expression de la violence au moyen des nouvelles
                    technologies et tout particulièrement celle du cyberharcèlement. Il s'agit d'analyser les discours d'expériences
                    (victimes, enquêteurs) et les échanges de conversations (sms, réseaux sociaux, mails, etc.), afin d'identifier 
                    les phénomènes d'engrenage, les stratégies d'influence et de manipulation enclenchées par les prédateurs. </p>

                <a href="projet.php" class="More">En savoir plus</a>

            </div>

            <div id="UselessBar"></div>
            

            <div class="HexagonGroupHome1">
                <div id="hexagonHome1"></div>
                <div id="hexagonHome1-1"></div>
                <div id="hexagonHome2"></div>
                <div id="hexagonHome2-2"></div>
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
                <img class="hexagonHome3" src="style/Assets/Logo-GN.svg" style="padding: 20px;">
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



</div> <?php } ?>

</body>

<script>

    function WaiterDisapear(x) {
        x.classList.add("disapear");
        document.body.style.overflow = 'scroll';
    }



</script>

<script src="js/countdown.js"></script>

</html>