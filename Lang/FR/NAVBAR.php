<!-- NAVBAR - Lang = FR -->

                    <?php include 'Files/Const/const.php'; ?>

                    <div class="navbar">
                        <a href="Actualites">ACTUALITES</a>
                        <a href="projet">PROJET</a>
                        <a href="Temoignage">TEMOIGNAGE</a>
                        <a href="EnImage">EN IMAGE</a>
                        <a href="Redirection">RESSOURCES</a>
                        <a href="index"><i class="fas fa-home"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>
                        <div id="LangDropdown"><img src="<?php echo LogoFR; ?>">
                            <div id="LangDropdown-content">

                                <form action="Files/Language/LanguageManager.php" method="post" id="ENG01"><input type="hidden" name="Langue" value="ENG01"></form>
                                <form action="Files/Language/LanguageManager.php" method="post" id="ESP01"><input type="hidden" name="Langue" value="ESP01"></form>

                                <a class="Lang" href="#" onclick="getElementById('ESP01').submit();"><img src="<?php echo LogoESP; ?>" class="LangDropdown-content"></a>
                                <a class="Lang" href="#" onclick="getElementById('ENG01').submit();"><img src="<?php echo LogoENG; ?>" class="LangDropdown-content"></a>
                            </div>
                        </div>
                    </div>

                    <!-- END NAVBAR -->



                   