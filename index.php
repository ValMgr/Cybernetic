<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CyberNeTic</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/hexagon.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> 

</head>
<body>

    <div class="wrapper">


        <div class="waiter" onclick="WaiterToggle(this)">
            <div class="waiter-title">
                <div class="glitch">
                    <h1>CyberNeTic</h1>
                    <h1>CyberNeTic</h1>
                    <h1>CyberNeTic</h1>
                </div>
            </div>
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

                    <h2>À propos du projet </h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     In vulputate quam vitae tincidunt scelerisque. Aliquam ut tortor nec metus egestas rutrum.
                      Nulla lobortis purus ipsum, sed porta enim vehicula quis. Cras nec diam massa. Nulla venenatis dignissim urna.
                       In commodo tristique gravida. Phasellus a dignissim erat. Donec rhoncus finibus varius. Nulla in hendrerit sapien.
                        Phasellus lorem est, mattis in vulputate et, aliquet vel erat. Quisque auctor dignissim sollicitudin.
                         Proin ut nunc hendrerit magna finibus porta. Duis bibendum pretium mattis. </p>

                </div>

                <div class="HexagonGroup1">
                    <div class="hexagon"></div>
                    <div class="hexagon2"></div>
                </div>

    </div>

</body>

<script>

    function WaiterToggle(x) {
        x.classList.add("disapear");
    }

</script>

</html>