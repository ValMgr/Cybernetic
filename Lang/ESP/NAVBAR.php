<!-- NAVBAR - Lang = ESP -->

                    <div class="navbar">
                        <a href="Actualites.php">VAMOS A</a>
                        <a href="projet.php">LA PLAYA</a>
                        <a href="Temoignage.php">A MI ME </a>
                        <a href="EnImage.php">GUASTA</a>
                        <a href="Redirection.php">BAILAR</a>
                        <a href="index.php"><i class="fas fa-home"></i></a>
                        <a href="#"><i class="fas fa-search"></i></a>
                        <div id="LangDropdown"><img src="style/Assets/Icon/spain.svg">
                            <div id="LangDropdown-content">

                                <form action="Files/Language/LanguageManager.php" method="post" id="FRA01"><input type="hidden" name="Langue" value="FRA01"></form>
                                <form action="Files/Language/LanguageManager.php" method="post" id="ENG01"><input type="hidden" name="Langue" value="ENG01"></form>

                                <a href="#" onclick="getElementById('ENG01').submit();"><img src="style/Assets/Icon/united-kingdom.svg" class="LangDropdown-content"></a>
                                <a href="#" onclick="getElementById('FRA01').submit();"><img src="style/Assets/Icon/france.svg" class="LangDropdown-content"></a>
                            </div>
                        </div>
                    </div>

                    <!-- END NAVBAR -->