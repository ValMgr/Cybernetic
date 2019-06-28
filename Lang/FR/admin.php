<?php

    $getArticles = "SELECT * FROM `articles`";
    $query = $dbPdo->query($getArticles);
    $Articles = $query->fetchAll();

    //print_r($Articles);

?>


<div class="wrapper">

                <?php include 'NAVBAR.php' ?>

                <div id="MailleAdmin"></div>

                <div class="HexagonGroupAdmin">
                    <div id="hexagonProject1"></div>
                    <div id="hexagonProject1-1"></div>
                    <h2 id="hexagonProject1-title">Espace Administrateur</h2>
                </div>

                <a id="AdminbtnCreate" href="AddArticle.php">Nouvel Article</a>

                <h3 class="listadmin">Liste des Articles & Actuaités</h3>

                <div id="AdminList">

                <?php

                    foreach ($Articles as $key => $rows) {
                        
                    ?>

                    <div id="AdminActu">
                        <img src="style/Assets/Actu1.jpg" style="width: 35%;">
                        <h3><?php echo $rows[2];?></h3>
                        <p><?php echo $rows[3];?></p>
                        <p class="ActuDate"><i class="far fa-clock"></i> <?php echo $rows[1];?></p><br>
                    </div>
                    <div id="Controles">
                        <a class="AdminbtnModif" href="EditNewArticleExemple.php">Modifier</a>
                        <a class="AdminbtnSupp" onclick="return confirm('Voulez-vous vraiment supprimer l\'article ?'); getElementById('Delete').submit();" href="Files/Article/Article_Delete.php?ArtID=<?php echo $rows[0]; ?>">Supprimer</a>
                    </div>


                <?php } ?>

                </div>

        </div>
        <br><br><br><br><br>