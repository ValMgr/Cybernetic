<!-- NAVBAR - Lang = ENG -->

                    <div class="navbar">
                        <a href="Actualites.php">ACTUALITY</a>
                        <a href="projet.php">PROJECT</a>
                        <a href="Temoignage.php">TESTIMONY</a>
                        <a href="EnImage.php">PICTURES</a>
                        <a href="Redirection.php">RESSOURCES</a>
                        <a href="index.php"><i class="fas fa-home"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>
                        <div id="LangDropdown"><img src="style/Assets/Icon/united-kingdom.svg">
                            <div id="LangDropdown-content">

                                <form action="Files/Language/LanguageManager.php" method="post" id="FRA01"><input type="hidden" name="Langue" value="FRA01"></form>
                                <form action="Files/Language/LanguageManager.php" method="post" id="ESP01"><input type="hidden" name="Langue" value="ESP01"></form>

                                <a href="#" onclick="getElementById('FRA01').submit();"><img src="style/Assets/Icon/france.svg" class="LangDropdown-content"></a>
                                <a href="#" onclick="getElementById('ESP01').submit();"><img src="style/Assets/Icon/spain.svg" class="LangDropdown-content"></a>
                            </div>
                        </div>
                    </div>

                    <!-- END NAVBAR -->