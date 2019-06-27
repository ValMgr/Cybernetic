<?php

    $getArticles = "SELECT * FROM ARTICLES";
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
                


                    <div class="About">

                    

                        <p> En partenariat avec la Gendarmerie Nationale, le projet CyberNeTic vise à mener une recherche-action au coeur des sciences
                            de l'information et de la communication pour étudier les formes d'expression de la violence au moyen des nouvelles
                            technologies et tout particulièrement celle du cyberharcèlement. Il s'agit d'analyser les discours d'expériences
                            (victimes, enquêteurs) et les échanges de conversations (sms, réseaux sociaux, mails, etc.), afin d'identifier 
                            les phénomènes d'engrenage, les stratégies d'influence et de manipulation enclenchées par les prédateurs.
                        </p>

                        <a href="projet.php" class="More">En savoir plus</a>

                    </div>

                    <div id="UselessBar"></div>
                    

                    <div class="HexagonGroupHome1">
                        <div class="Projetglitch" >
                            <div class="hexagonHome1 glitch_"></div>
                            <div class="hexagonHome1 glitch_"></div>
                            <div class="hexagonHome1 glitch_"></div>
                            <div class="hexagonHome1 glitch_"></div>
                            <div class="hexagonHome1 glitch_"></div>
                        </div>

                        <!-- <div class="hexagonHome1"></div> -->
                        <div id="hexagonHome1-1"></div>
                        <div id="hexagonHome2"></div>
                        <div id="hexagonHome2-2"></div>
                        <h3 id="hexagonHome1-title">LE PROJET</h3>
                    </div>


                    <div class="Actuality"> <h2>ACTUALITES</h2> </div>


                    <?php

                    $i = 0;
                    foreach ($Articles as $key => $rows) {
                        $i++;

                        if($i < 4){   ?>

                    <div class="LastActu">
                        <div id="LastActu<?php echo ($i) ?>">
                            <img src="style/Assets/Actu<?php echo ($i) ?>.jpg" style="width: 100%;"> <!-- Img en dur -->
                            <h3><?php echo ($rows[2]); ?></h3>
                            <p><?php echo ($rows[3]); ?></p>
                            <p class="ActuDate"><i class="far fa-clock"></i> <?php echo ($rows[1]); ?></p>
                        </div>
                        <div id="LastActu<?php echo ($i) ?>-<?php echo ($i); ?>"></div>

                    </div>

                    <?php } } ?>

                        
                    

                    <div class="ActuMore"><a href="Actualites.php" class="More">EN VOIR PLUS</a></div>


                    <!-- <div id="MailleHome2"></div> -->

                    <div class="Partner">
                        <h2>NOS PARTENAIRES</h2>
                    </div>

                    <!-- <div id="MailleHome3"></div> -->

                    <div class="HexagonGroupHome2">
                        <img class="hexagonHome3" src="style/Assets/Logo-NTech.jpg" style="padding: 20px 0px;">
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


                    <?php include 'FOOTER.php'; ?>


    </div>