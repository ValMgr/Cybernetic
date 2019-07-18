<?php 
    include '../Connect/db_connection.php';
    //include '../Connect/connection_check.php';
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

        $date = date("Y-m-d");

        $title = $_POST['title'];
        $chapo = $_POST['chapo'];
        $Para1 = $_POST['Paragraphe1'];
        
        if(isset($_POST['Subtitle2'])){
            $Sub2 = $_POST['Subtitle2'];
        }
        else{
            $Sub2 = "NULL";
        }

        if(isset($_POST['Paragraphe2'])){
            $Para2 = $_POST['Paragraphe2'];
        }
        else{
            $Para2 = "NULL";
        }

        if(isset($_POST['Subtitle3'])){
            $Sub3 = $_POST['Subtitle3'];
        }
        else{
            $Sub3 = "NULL";
        }

        if(isset($_POST['Paragraphe3'])){
            $Para3 = $_POST['Paragraphe3'];
        }
        else{
            $Para3 = "NULL";
        }

        if(isset($_POST['Subtitle4'])){
            $Sub4 = $_POST['Subtitle4'];
        }
        else{
            $Sub4 = "NULL";
        }

        if(isset($_POST['Paragraphe4'])){
            $Para4 = $_POST['Paragraphe4'];
        }
        else{
            $Para4 = "NULL";
        }

        if(isset($_POST['Subtitle5'])){
            $Sub5 = $_POST['Subtitle5'];
        }
        else{
            $Sub5 = "NULL";
        }

        if(isset($_POST['Paragraphe5'])){
            $Para5 = $_POST['Paragraphe5'];
        }
        else{
            $Para5 = "NULL";
        }

        $NumLang = $_POST['NumLang'];

        $img = $_FILES['image']['name'];

        $AddArticle = "INSERT INTO `articles`(`DateArticle`, `TitleArticle`, `ChapoArticle`, `Paragraphe1`,
            `Subtitle1`, `Paragraphe2`, `Subtitle2`, `Paragraphe3`, `Subtitle3`, `Paragraphe4`,
            `Subtitle4`, `Paragraphe5`, `NumLang`, `imagename`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $query = $dbPdo->prepare($AddArticle);
     

        $query->bindValue(1, $date, PDO::PARAM_STR);  echo $date . "<br />";
        $query->bindValue(2, $title, PDO::PARAM_STR);  echo $title . "<br />";
        $query->bindValue(3, $chapo, PDO::PARAM_STR);  echo $chapo . "<br />";
        $query->bindValue(4, $Para1, PDO::PARAM_STR);  echo $Para1 . "<br />"; 
        $query->bindValue(5, $Sub2, PDO::PARAM_STR);  echo $Sub2 . "<br />";
        $query->bindValue(6, $Para2, PDO::PARAM_STR);  echo $Para2 . "<br />";
        $query->bindValue(7, $Sub3, PDO::PARAM_STR);  echo $Sub3 . "<br />";
        $query->bindValue(8, $Para3, PDO::PARAM_STR); echo $Para3 . "<br />";
        $query->bindValue(9, $Sub4, PDO::PARAM_STR);  echo $Sub4 . "<br />";
        $query->bindValue(10, $Para4, PDO::PARAM_STR);  echo $Para4 . "<br />";
        $query->bindValue(11, $Sub5, PDO::PARAM_STR);  echo $Sub5 . "<br />";
        $query->bindValue(12, $Para5, PDO::PARAM_STR);  echo $Para5 . "<br />";
        $query->bindValue(13, $NumLang, PDO::PARAM_STR);  echo $NumLang . "<br />";
        $query->bindValue(14, $img, PDO::PARAM_STR);  echo $img . "<br />";

        move_uploaded_file($_FILES['image']['tmp_name'], "picture/$img");

        $query->execute();

        print_r($query);

        header('location: ../../Admin.php')


 ?>


</body>
</html>