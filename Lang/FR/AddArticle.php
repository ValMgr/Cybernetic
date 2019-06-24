<?php  
 $dbPdo = mysqli_connect("localhost", "root", "", "cybernetic");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }

    include '../../Files/Connect/db_connection.php';
    include '../../Files/Connect/connection_check.php';  
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CyberNeTic</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../../style/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../../style/mainResponsive.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../../style/hexagon.css" /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> 

</head>
    <body>

        <div class="wrapper">

        <?php
         
            $query = "SELECT * FROM Langues";
            $stmt = $dbPdo->prepare($query);
            $stmt->execute();


            ?>



                <?php include 'NAVBAR.php'; ?>

                <div id="MailleAdmin"></div>

                <div class="HexagonGroupAdmin">
                    <div id="hexagonProject1"></div>
                    <div id="hexagonProject1-1"></div>
                    <h2 id="hexagonProject1-title">Edition Nouvel Article</h2>
                </div>

                <a id="Return" href="Admin.php">Retour</a>

                <form id="Edition" action="Article_Add.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="titre" placeholder="Titre">
                    <textarea class="chapo" placeholder="Châpo..."></textarea>
                    <label for="NbrParagraphe">Nombre de paragraphe</label>
                    <input type="number" id="NbrPara" name="NbrPara" min="1" max="5" onchange="NbrParagraphe()" value="1">
                    <textarea class="paragraphe" placeholder="Paragraphe..."></textarea>
                    <select type="text" name="listbox" placeholder="Langue" id="Here">

                        <?php foreach($stmt as $key => $value){  ?>
                            <option value="<?php  echo($value[0]);   ?>"><?php echo($value[1]); ?></option>
                        <?php  } ?>

                    </select>
                    <!-- <input type="date" name="date"> -->
                    <input type="file" name="image" id="image" />
                    <input type="submit" name="Envoie" value="VALIDER">
                </form>

        </div>
        <br><br><br>

    </body>

    <script>

            // Execute 1 time to display the first textarea
            NbrParagraphe();

            function NbrParagraphe(){

                var Nbr = document.getElementById("NbrPara").value;
                var NewDiv = document.getElementsByClassName("paragraphe");

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
                document.getElementsByClassName("paragraphe").remove();
                
               
               for (let index = 0; index < Nbr;  index++) {
                   
                    var ActualPara = index + 1;
                    var here = document.getElementById("Here");

                    if(ActualPara == 1){
                        here.insertAdjacentHTML('beforebegin',
                                 '<textarea class="paragraphe" placeholder="Paragraphe..."></textarea>');
                    }
                    else if(ActualPara > 1){
                        here.insertAdjacentHTML('beforebegin',
                                '<input class="paragraphe" name="Subtitle' + ActualPara + 
                                '" type="text" placeholder="Sous-Titre ' + ActualPara + 
                                '" required> <br class="paragraphe" /><textarea class="paragraphe" type="text" name="Paragraphe'
                                + ActualPara + '" placeholder="Paragraphe ' + ActualPara + '..." required></textarea><br class="paragraphe" />');
                        }
                }
            }


           

        </script>

         <script>  
         $(document).ready(function(){  
              $('#insert').click(function(){  
                   var image_name = $('#image').val();  
                   if(image_name == '')  
                   {  
                        alert("Please Select Image");  
                        return false;  
                   }  
                   else  
                   {  
                        var extension = $('#image').val().split('.').pop().toLowerCase();  
                        if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                        {  
                             alert('Invalid Image File');
                             $('#image').val('');  
                             return false;  
                        }  
                   }  
              });  
         });  
         </script>  

</html>