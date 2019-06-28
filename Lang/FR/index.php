<?php

    $getArticles = "SELECT * FROM `articles`";
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
                        <h2 id="hexagonHome0-title">Accueil</h2>
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

                    <div id="UselessBar2"></div>

                    <div id="Aboutlink">
                        <a href="projet.php" class="More AboutMore">En savoir plus</a>
                    </div>



                    <div class="Actuality"> <h2><i class="far fa-newspaper"></i> ACTUALITES</h2> </div>


                    <?php

                    $i = 0;
                    foreach ($Articles as $key => $rows) {
                        $i++;

                        if($i < 4){   ?>

                    <div class="LastActu">
                        <div id="LastActu<?php echo ($i) ?>">
                            <img style="width:100%; border-radius: 5px 5px 0px 0px;" src="style/Assets/Actu<?php echo ($i) ?>.jpg" style="width: 100%;"> <!-- Img en dur -->
                            <h3><?php echo ($rows[2]); ?></h3>
                            <p><?php echo ($rows[3]); ?></p>
                            <p class="ActuDate"><i class="far fa-clock"></i> <?php echo ($rows[1]); ?></p>
                        </div>
                        <div id="LastActu<?php echo ($i) ?>-<?php echo ($i); ?>"></div>

                    </div>

                    <?php } } ?>

                        
                    

                    <div id="ActuMore"><a href="Actualites.php" class="More ActuMore">EN VOIR PLUS</a></div>


                    <div id="hexagonHomeDeco2"></div>


                    <div id="Partners">
                            <span><i class="far fa-handshake"></i> PARTENAIRES</span>
                    </div>

                    <div class="HexagonGroupHome2">
                        <img class="hexagonHome3" src="style/Assets/Logo-NTech.png" style="padding: 25px 12.5px;">
                        <div class="hexagonHome4"></div>
                        <div id="hexagonHome5"></div>
                    </div>

                    <div class="HexagonGroupHome3">
                        <img class="hexagonHome3" src="style/Assets/Logo_Orange.jpg" style="padding: 50px 35px;">
                        <div class="hexagonHome4"></div>
                        <div id="hexagonHome6"></div>
                    </div>

                    <div class="HexagonGroupHome4">
                        <img class="hexagonHome3" src="style/Assets/Logo-UB.jpg" style="padding: 15px 0px;">
                        <div class="hexagonHome4"></div>
                        <div id="hexagonHome7"></div>
                    </div>


                    <div id="hexagonHomeDeco3"></div>


                    <?php include 'FOOTER.php'; ?>

    </div>