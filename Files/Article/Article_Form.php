<?php 
    include '../Connect/db_connection.php';
    include '../Connect/connection_check.php';
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

<?php
    // if($Connected == false){
    //             header ('location: ../Login/login_form.php');
    //     }

    ?>

        <form method="post">
            <label for="NbrParagraphe">Nombre de paragraphe</label>
            <input type="number" id="NbrPara" name="NbrPara" min="1" max="5" onchange="NbrParagraphe()" value="1">
        </form>

    <form action="Article_Add.php" method="post">

                

                <label for="title">Titre</label>
                <input type="text" name="title" required>
                    <br />

                <label for="chapo">Chapo</label>
                <input type="text" name="chapo" required>
                    <br />
                
                

                <input id="Here" type="file" name="Picture">
                   <br /> 
                <input type="submit">



    </form>


        <script>

            // Execute 1 time to display the first textarea
            NbrParagraphe();

            function NbrParagraphe(){

                var Nbr = document.getElementById("NbrPara").value;
                var NewDiv = document.getElementsByClassName("Para");

                // Allow to delete element
                Element.prototype.remove = function() {
                    this.parentElement.removeChild(this);
                }
                NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
                    for(var i = this.length - 1; i >= 0; i--) {
                        if(this[i] && this[i].parentElement) {
                            this[i].parentElement.removeChild(this[i]);
                        }
                    }
                }

                // Delete all div with ClassName "Para"
                document.getElementsByClassName("Para").remove();
                
               
               for (let index = 0; index < Nbr;  index++) {
                   
                    var ActualPara = index + 1;
                    var here = document.getElementById("Here");

                    if(ActualPara == 1){
                        here.insertAdjacentHTML('beforebegin',
                                 '<label class="Para" for="Paragraphe' + ActualPara +'">Paragraphe N°'
                                  + ActualPara + '</label><textarea class="Para" type="text" name="Paragraphe'
                                   + ActualPara + '" required></textarea><br class="Para" />');
                    }
                    else if(ActualPara > 1){
                        here.insertAdjacentHTML('beforebegin',
                                '<label class="Para" for="Subtitle' + ActualPara + '">Titre du Paragraphe N°' + ActualPara +
                                '</label><input class="Para" name="Subtitle' + ActualPara +
                                '" type="text" required><br class="Para" /><label class="Para" for="Paragraphe' + ActualPara +'">Paragraphe N°'
                                + ActualPara + '</label><textarea class="Para" type="text" name="Paragraphe'
                                + ActualPara + '" required></textarea><br class="Para" />');
                        }
                }
            }


           

        </script>

</body>
</html>