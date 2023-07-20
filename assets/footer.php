<?php
$page = basename(dirname($_SERVER["PHP_SELF"]));
?>
        </div>
        </main>
        <div class="footer-content">
            <footer class="footer">
                <ul class="footer-items footer-item">
                    <li id="footer-l">
                        <span>Non affilié avec Mojang AB.</span>
                        <br>
                        <span>Dev avec</span><span style="color: #ce0000"> ❤ </span><span>par NuggetReckt & Mamakse</span>
                        <br>
                        <span>Nous contacter:
                            <a href="mailto:contact@noskillworld.fr">contact@noskillworld.fr</a>
                        </span>
                    </li>
                    <li id="footer-r">
                        <a href="https://www.tiktok.com/@noskillworld_mc" target="_blank" id="tiktok-footer">
                            <img src="<?="/assets/images/tiktok.svg"?>" alt="tiktok" class="logo-f" id="logo-f-tiktok">
                        </a>
                        <a href="https://www.instagram.com/noskillworld/" target="_blank" id="insta-footer">
                            <img src="<?="/assets/images/instagram.svg"?>" alt="insta" class="logo-f" id="logo-f-insta">
                        </a>
                        <a href="https://twitter.com/NoSkillWorld" target="_blank" id="twitter-footer">
                            <img src="<?="/assets/images/twitter.svg"?>" alt="twitter" class="logo-f" id="logo-f-twitter">
                        </a>
                        <a href="https://discord.gg/cE4eHEZWrD" target="_blank" id="discord-footer">
                            <img src="<?="/assets/images/discord.svg"?>" alt="discord" class="logo-f" id="logo-f-discord">
                        </a>
                    </li>
                </ul>
                <hr class="footer-item">
                <div class="sub-footer footer-item">
                    <span>Copyright © NoSKillWorld 2020 - 2023</span>
                </div>
            </footer>
        </div>
        <button onclick="topFunction()" id="to-top" title="Haut de page"></button>
        <?php
        if ($page == "wiki") {
            echo "        <script src='../assets/js/copy.js'></script>\n";
            echo "        <script src='../assets/js/scroll.js'></script>\n";
            echo "        <script src='../assets/js/responsive.js'></script>\n";
            echo "        <script src='../assets/js/enhance.js'></script>\n";
        } else {
            echo "        <script src='assets/js/copy.js'></script>\n";
            echo "        <script src='assets/js/scroll.js'></script>\n";
            echo "        <script src='assets/js/responsive.js'></script>\n";
        }
        ?>
    </body>
</html>