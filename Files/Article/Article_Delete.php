<?php 

    include '../Connect/db_connection.php';


    $Delete = "DELETE FROM `articles` WHERE NumArticle = ?";
    $query = $dbPdo->prepare($Delete);

    $query->bindValue(1, $_GET['ArtID'], PDO::PARAM_STR);

    $query->execute();

    header('location: ../../Admin.php')




 ?>