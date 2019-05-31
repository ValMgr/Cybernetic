<?php header("refresh:3;url=index.php");?> 

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


    <style>

        .waiter{
            top: -20%;
            
            background-image: url('style/Assets/Maille.png');
        }

        .loader{
            position: absolute;
            top: 50%;
            left: calc(50% - 125px);
        }

        #HexaLoad1{
            width: 250px; /* Pour width: +50 = height +12,5  */
            height: 262.5px; /* Pour width: +100 = height +25 */
            -webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            
            opacity: 1;
            background-color: #174691;
            animation: 5s rotation1 infinite linear;
            position: absolute;
            z-index: 10;
        }

        #HexaLoad2{
            width: 246px; /* Pour width: +50 = height +12,5  */
            height: 258.5px; /* Pour width: +100 = height +25 */
            -webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            opacity: 1;
            background-color: white;
            position: absolute;
            transform: translate(2px, 2px);
            z-index: 10;
            animation: 5s rotation2 infinite linear;

        }

        #HexaLoad3{
            width: 190px; /* Pour width: +50 = height +12,5  */
            height: 215px; /* Pour width: +100 = height +25 */
            -webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            
            opacity: 1;
            background-color: #03AFA8;
            transform: translate(30px, 25.5px) rotate(90deg); 
            animation: 2s rotation3 infinite linear;
            position: absolute;
            z-index: 10;
        }

        #HexaLoad4{
            width: 184px; /* Pour width: +50 = height +12,5  */
            height: 209px; /* Pour width: +100 = height +25 */
            -webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            
            opacity: 1;
            background-color: white;
            transform: translate(33px, 28.5px) rotate(90deg); 
            animation: rotation4 2s linear infinite;
            position: absolute;
            z-index: 10;
        }

        #h3{
            position: relative;
            z-index: 11;
            font-family: 'Cybernetic';
            transform: translate(50px, 125px);
            font-size: 0.9em;
        }



        @keyframes rotation1{
            0%{
                transform: rotate(0deg);
            }
            25%{
                transform: rotate(-90deg);
            }
            50%{
                transform: rotate(-180deg);
            }
            75%{
                transform: rotate(-270deg);
            }
            100%{
                transform: rotate(-360deg);
            }
        }

        @keyframes rotation2{
            0%{
                transform: translate(2px, 2px) rotate(0deg);
            }
            25%{
                transform: translate(2px, 2px) rotate(-90deg);
            }
            50%{
                transform: translate(2px, 2px) rotate(-180deg);
            }
            75%{
                transform: translate(2px, 2px) rotate(-270deg);
            }
            100%{
                transform: translate(2px, 2px) rotate(-360deg);
            }
        }

        @keyframes rotation3{
            0%{
                transform: translate(30px, 30px) rotate(90deg);
            }
            25%{
                transform: translate(30px, 30px) rotate(180deg);
            }
            50%{
                transform: translate(30px, 30px) rotate(270deg);
            }
            75%{
                transform: translate(30px, 30px)rotate(360deg);
            }
            100%{
                transform: translate(30px, 30px)rotate(450deg);
            }
        }

        @keyframes rotation4{
            0%{
                transform: translate(33px, 33px) rotate(90deg);
            }
            25%{
                transform: translate(33px, 33px) rotate(180deg);
            }
            50%{
                transform: translate(33px, 33px) rotate(270deg);
            }
            75%{
                transform: translate(33px, 33px) rotate(360deg);
            }
            100%{
                transform: translate(33px, 33px) rotate(450deg);
            }
        }


    </style>

</head>
<body>

    <div class="wrapper">


        <div class="waiter">
            <div class="waiter-title">
                <div class="glitch">
                    <h1>CyberNeTic</h1>
                    <h1>CyberNeTic</h1>
                    <h1>CyberNeTic</h1>
                </div>
            </div>

            <p style="left: calc(50% - 150px);top:50%;">WORK IN PROGRESS</p>
            <p id="timer"></p>

            
        </div>

        <div class="loader">
                <div id="HexaLoad1"></div>
                <div id="HexaLoad2"></div>

                <div id="HexaLoad3"></div>
                <div id="HexaLoad4"></div>

                <h3 id="h3">Redirection ... </h3>

            </div>

    </div>

    <?php header("refresh:5;url=index.php");?> 

    <script src="js/countdown.js"></script>


</body>
</html>