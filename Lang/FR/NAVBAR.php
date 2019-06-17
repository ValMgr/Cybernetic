<!-- NAVBAR - Lang = FRA -->

                    <div class="navbar">
                        <a href="Actualites.php">ACTUALITES</a>
                        <a href="projet.php">PROJET</a>
                        <a href="Temoignage.php">TEMOIGNAGE</a>
                        <a href="EnImage.php">EN IMAGE</a>
                        <a href="Redirection.php">RESSOURCES</a>
                        <a href="index.php"><i class="fas fa-home"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>
                        <div id="LangDropdown"><img src="style/Assets/Icon/france.svg">
                            <div id="LangDropdown-content">

                                <form action="Files/Language/LanguageManager.php" method="post" id="ENG01"><input type="hidden" name="Langue" value="ENG01"></form>
                                <form action="Files/Language/LanguageManager.php" method="post" id="ESP01"><input type="hidden" name="Langue" value="ESP01"></form>

                                <a href="#" onclick="getElementById('ESP01').submit();"><img src="style/Assets/Icon/spain.svg" class="LangDropdown-content"></a>
                                <a href="#" onclick="getElementById('ENG01').submit();"><img src="style/Assets/Icon/united-kingdom.svg" class="LangDropdown-content"></a>
                            </div>
                        </div>
                    </div>

                    <!-- END NAVBAR -->