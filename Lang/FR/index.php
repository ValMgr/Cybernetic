<?php

    $getArticles = "SELECT * FROM `articles` ORDER BY `NumArticle` DESC";
    $query = $dbPdo->query($getArticles);
    $Articles = $query->fetchAll();

    //print_r($Articles);

?>

<!-- Index / Lang = FR -->

    <div class="wrapper">


            <div class="waiter" onclick="WaiterDisapear(this);">
                <div class="waiter-title">
                    <div class="glitch">
                        <h1>CyberNeTic</h1>
                        <h1>CyberNeTic</h1>
                        <h1>CyberNeTic</h1>
                    </div>

                   

                </div>

                <p id="date"></p>


            </div>

        

            
                    <?php include 'NAVBAR.php'; ?>


                    <div id="particles-js" class="SAH" style="top: 10%;"></div>

                    <div class="HexagonGroupHome0">
                        <div id="hexagonHome0"></div>
                        <div id="hexagonHome0-0"></div>
                        <h2 id="hexagonHome0-title">CyberNeTic</h2>
                    </div>

                    <div id="AboutDiv"></div>

                    <div id="hexagonHomeDeco1"></div>
            
                    <div class="HexagonGroupHome1">
                        <div class="Projetglitch" >
                            <div class="hexagonHome1 glitch_"></div>
                            <div class="hexagonHome1 glitch_"></div>
                            <div class="hexagonHome1 glitch_"></div>
                            <div class="hexagonHome1 glitch_"></div>
                            <div class="hexagonHome1 glitch_"></div>
                        </div>

                        <div id="hexagonHome2"></div>
                        <h3 id="hexagonHome1-title">LE PROJET</h3>
                    </div>

                    <div id="UselessBar1"></div>

                    <div class="About">
                        <p> 
                            En partenariat avec la Gendarmerie Nationale, le projet CyberNeTic vise à mener une recherche-action au coeur des sciences de l'information et de la communication pour étudier les formes d'expression de la violence au moyen des nouvelles technologies et tout particulièrement celle du cyberharcèlement. Il s'agit d'analyser les discours d'expériences (victimes, enquêteurs) et les échanges de conversations (sms, réseaux sociaux, mails, etc.), afin d'identifier les phénomènes d'engrenage, les stratégies d'influence et de manipulation enclenchées par les prédateurs.<br>
                        </p>
                    </div>


                    <div id="Aboutlink">
                    <div id="UselessBar2"></div>
                        <a href="projet.php" class="More AboutMore">En savoir plus</a>
                    </div>



                    <div class="Actuality"> <h2><i class="far fa-newspaper"></i> ACTUALITES</h2> </div>



                    <div class="articlesIndex">
                        <div class="container">
                            <div class="articles__items">

                                <?php 
                                    $j = 0;
                                    $img = count($Articles);
                                    foreach ($Articles as $key => $rows) {
                                    
                                        $j++;

                                        if($j < 4){ ?>                
                                            <div class="article">
                                                <img src="Files/Article/picture/<?php echo($rows['imagename']) ?>" style="width: 100%; border-radius: 5px 5px 0px 0px;">
                                                <h3><?php echo ($rows[2]); ?></h3>
                                                <p class="Article__content"><?php echo ($rows[3]); ?></p>
                                                <p class="ActuDate2"><i class="far fa-clock"></i> <?php echo ($rows[1]); ?></p>
                                            </div>
                                <?php
                                    $img--;
                                 } } ?>
                            </div>
                        </div>
                    </div>

                        
                    

                    <div id="ActuMore"><a href="Actualites.php" class="More ActuMore">EN VOIR PLUS</a></div>


                    <div id="hexagonHomeDeco2"></div>

                        <div class="partenaires">
                            <div class="container">
                                <h2 class="partenaires__title"><i class="far fa-handshake"></i> Partenaires</h2>
                                <div class="partenaires__items">
                                    <div class="partenaire1"></div>
                                    <div class="partenaire2"></div>
                                    <div class="partenaire3"></div>
                                    <div class="partenaire4"></div>
                                    <div class="partenaire5"></div>
                                </div>
                            </div>
                        </div>


                    <div id="hexagonHomeDeco3"></div>


                    <?php include 'FOOTER.php'; ?>

    </div>