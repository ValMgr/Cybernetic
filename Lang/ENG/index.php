<?php

    $getArticles = "SELECT * FROM `articles` ORDER BY `NumArticle` DESC";
    $query = $dbPdo->query($getArticles);
    $Articles = $query->fetchAll();

    //print_r($Articles);

?>

<!-- Index / Lang = ENG -->

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
                        <h3 id="hexagonHome1-title"> PROJECT</h3>
                    </div>

                    <div id="UselessBar1"></div>

                    <div class="About">
                        <p> 
                            In partnership with the National Gendarmerie, the CyberNeTic project aims to conduct an action research at the heart of the information and communication sciences to study forms of expression of violence using new technologies, particularly cyberbullying. It is a question of analyzing the speeches of experiences (victims, investigators) and the exchanges of conversations (sms, social networks, mails, etc.), in order to identify the phenomena of gearing, the strategies of influence and manipulated by predators.<br>
                        </p>
                    </div>


                    <div id="Aboutlink">
                    <div id="UselessBar2"></div>
                        <a href="projet.php" class="More AboutMore">Learn More</a>
                    </div>



                    <div class="Actuality"> <h2><i class="far fa-newspaper"></i> ACTUALITIES</h2> </div>



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

                        
                    

                    <div id="ActuMore"><a href="Actualites.php" class="More ActuMore">See More</a></div>


                    <div id="hexagonHomeDeco2"></div>

                        <div class="partenaires">
                            <div class="container">
                                <h2 class="partenaires__title"><i class="far fa-handshake"></i> Partners</h2>
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