<?php

    $getArticles = "SELECT * FROM ARTICLES";
    $query = $dbPdo->query($getArticles);
    $Articles = $query->fetchAll();

    //print_r($Articles);

?>

<!-- Actuality / Lang = FR -->

<div class="wrapper">

                <?php include 'NAVBAR.php'; ?>

                <!-- <div id="MailleActus1"></div> -->

                <div id="particles-js" class="SAH" style="top: 10%;"></div>


                <div class="HexagonGroupProject1">
                    <div id="hexagonProject1"></div>
                    <div id="hexagonProject1-1"></div>
                    <h2 id="hexagonProject1-title">Actualités</h2>
                </div>


                <div class="ListActus1">

                    <?php 

                    $j = 0;
                    foreach ($Articles as $key => $rows) {
                    
                        $j++;

                        if($j < 4){ ?>
            
                
                    <div id="Actu<?php echo ($j) ?>">
                        <img src="style/Assets/Actu<?php echo ($j) ?>.jpg" style="width: 100%;">
                        <h3><?php echo ($rows[2]); ?></h3>
                        <p><?php echo ($rows[3]); ?></p>
                        <p class="ActuDate"><i class="far fa-clock"></i> <?php echo ($rows[1]); ?></p>
                    </div>
                    <div id="Actu<?php echo ($j); ?>-2"></div>

               <?php } } ?>

                </div>

                <div class="ListActus2">

                    <?php 

                    for ($i=3; $i < 6; $i++) { 
                                          
                            if(isset($Articles[$i])){                  
                                
                            ?>

                    <div id="Actu<?php echo ($i+1) ?>">
                        <img src="style/Assets/Actu5.jpg" style="width: 100%;">
                        <h3><?php echo ($Articles[$i][2]); ?></h3>
                        <p><?php echo ($Articles[$i][3]); ?></p>
                        <p class="ActuDate"><i class="far fa-clock"></i> <?php echo ($Articles[$i][1]); ?></p>
                    </div>
                    <div id="Actu<?php echo ($i+1) ?>-2"></div>

                    <?php  
                    
                            }
                            else if(!isset($Articles[$i])) {   ?>

                    <div id="Actu<?php echo ($i+1) ?>">
                        <img src="style/Assets/Actu5.jpg" style="width: 100%;">
                        <h3> A Venir </h3>
                        <p>Nos prochaines conférences et actualités sur le domaine du CyberHarcèlement seront bientôt disponibles. Restez à l'écoute. <br><br></p>
                        <p class="ActuDate"><i class="far fa-clock"></i> Unknow</p>
                    </div>
                    <div id="Actu<?php echo ($i+1) ?>-2"></div>

                   <?php } }?>

                </div>


                <?php include 'FOOTER.php'; ?>


                
                

        </div>