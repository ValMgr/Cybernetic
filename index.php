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
    <link rel="stylesheet" type="text/css" media="screen" href="style/hexagonResponsive.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> 

</head>
<body>

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

            <img id="waiter-img" src="style/Assets/Maille.png">

        </div>

    

        
                <div class="navbar">
                    <a href="#">Actualités</a>
                    <a href="#" id="select">Projet</a>
                    <a href="#">Formulaire</a>
                    <a href="#">Contact</a>
                    <a href="#">ABCDAIR</a>
                    <a href="#"><i class="fas fa-search"></i></a>
                </div>

                <div class="content">

                    <p> En partenariat avec la Gendarmerie Nationale, le projet CyberNeTic vise à mener une recherche-action au coeur des sciences
                        de l'information et de la communication pour étudier les formes d'expression de la violence au moyen des nouvelles
                        technologies et tout particulièrement celle du cyberharcèlement. Il s'agit d'analyser les discours d'expériences
                        (victimes, enquêteurs) et les échanges de conversations (sms, réseaux sociaux, mails, etc.), afin d'indentifier 
                        les phénomène d'engrenage, les stratégies d'influence et de manipulation enclenchés par les prédateurs. </p>

                    <!-- <a> Lire la suite </a> -->

                </div>

                <div class="HexagonGroup1">
                    <div class="hexagon1" id="hexagon11"></div>
                    <div class="hexagon1" id="hexagon12"></div>
                    <div id="hexagon1-title"><h3>LE PROJET</h3></div>
                </div>

    </div>

</body>

<script>

    function WaiterDisapear(x) {
        x.classList.add("disapear");
    }

</script>

<script src="js/countdown.js"></script>

</html>