<!-- NAVBAR - Lang = FR -->

                    <?php include 'Files/const.php'; ?>
                    

                    <div id="navbar" class="navbar">
                        <a href="Actualites">ACTUALITIES</a>
                        <a href="projet">PROJECT</a>
                        <a href="Temoignage">TESTIMONY</a>
                        <a href="EnImage">IN IMAGE</a>
                        <a href="index"><i class="fas fa-home"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>

                        <?php 
                            if(isset($_SESSION['Connected']) && $_SESSION['Connected'] == true){
                                ?> <a href="Files/Connect/disconnect.php" style="font-size: 1.5em;"><i class="fas fa-times"></i></a> <?php
                            }
                        ?>

                        <div id="LangDropdown"><img src="<?php echo LogoENG; ?>">
                            <div id="LangDropdown-content">

                                <form action="Files/Language/LanguageManager.php" method="post" id="FRA01"><input type="hidden" name="Langue" value="FRA01"></form>
                                <form action="Files/Language/LanguageManager.php" method="post" id="ESP01"><input type="hidden" name="Langue" value="ESP01"></form>

                                <a class="Lang" href="#" onclick="getElementById('FRA01').submit();"><img src="<?php echo LogoFR; ?>" class="LangDropdown-content"></a>
                                <a class="Lang" href="#" onclick="getElementById('ESP01').submit();"><img src="<?php echo LogoESP; ?>" class="LangDropdown-content"></a>
                            </div>
                        </div>
                    </div>

                    <!-- END NAVBAR -->



                   