<?php

    $getArticles = "SELECT * FROM `articles` ORDER BY `NumArticle` DESC";
    $query = $dbPdo->query($getArticles);
    $Articles = $query->fetchAll();

    //print_r($Articles);

?>

<!-- Actuality / Lang = FR -->

<div class="wrapper">

        <?php include 'NAVBAR.php'; ?>

        <div id="particles-js" class="SAH" style="top: 10%;"></div>


        <div class="HexagonGroupProject1">
            <div id="hexagonProject1"></div>
            <div id="hexagonProject1-1"></div>
            <h2 id="hexagonProject1-title">Noticias</h2>
        </div>


        <div class="articles">
            <div class="container">
                <div class="articles__items">

                    <?php 
                        $j = 0;
                        $img = count($Articles);
                        foreach ($Articles as $key => $rows) {
                        
                            $j++;

                            if($j < $Articles){ ?>
                                <a class="article" href="index.php" style="text-decoration: none; color: #333;">                
                                    <div>
                                        <img src="Files/Article/picture/<?php echo($rows['imagename']) ?>" style="width: 100%; border-radius: 5px 5px 0px 0px;">
                                        <h3><?php echo ($rows[2]); ?></h3>
                                        <p class="Article__content"><?php echo ($rows[3]); ?></p>
                                        <p class="ActuDate2"><i class="far fa-clock"></i> <?php echo ($rows[1]); ?></p>
                                    </div>
                                </a>
                    <?php
                        $img--;
                     } } ?>
                </div>
            </div>
        </div>


        <?php include 'FOOTER.php'; ?>

</div>