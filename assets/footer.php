        </div>
        </main>
        <div class="footer-content">
            <footer class="footer">
                <ul class="footer-items" id="footer-l">
                    <li id="affilié" class="footer-item">
                        <span>Non affilié avec Mojang AB.</span>
                        <br>
                        <span>Site dev avec ❤ par NuggetReckt</span>
                    </li>
                    <br>
                    <li id="contact" class="footer-item">
                        <span>Nous contacter : </span>
                        <a href="mailto:contact@noskillworld.fr">contact@noskillworld.fr</a>
                    </li>
                </ul>
                <ul class="footer-items" id="footer-r">
                    <li id="twitter-footer" class="footer-item">
                        <a href="https://twitter.com/NoSkillWorld" target="_blank">
                            <img src="<?="/assets/images/twitter.svg"?>" alt="twitter" id="logo-f">
                        </a>
                    </li>
                    <li id="discord-footer" class="footer-item">
                        <a href="https://discord.gg/cE4eHEZWrD" target="_blank">
                            <img src="<?="/assets/images/discord.svg"?>" alt="discord" id="logo-f">
                        </a
                    </li>
                </ul>
                <br>
                <br>
                <br>
                <br>
                <hr>
                <div class="sub-footer">
                    <span>Copyright © NoSKillWorld 2020 - 2022</span>
                </div>
            </footer>
        </div>
        <button onclick="topFunction()" id="to-top" title="Haut de page"></button>

        <script type="text/javascript"
                src="https://www.serveurs-minecraft.org/api/players_count.php?id=60934&format=jsonp"></script>
        <script type="text/javascript"
                src="https://www.serveurs-minecraft.org/api/slots_count.php?id=60934&format=jsonp"></script>
        <script type="text/javascript"
                src="https://www.serveurs-minecraft.org/api/is_online.php?id=60934&format=jsonp"></script>
        <script type="text/javascript">
            window.onload = function () {
                let players = document.getElementById("players_count");
                let slots = document.getElementById("slots_count");
                let elt = document.getElementById("is_online");
                if (serveurs_minecraft_org_players_count >= 0 && serveurs_minecraft_org_slots_count >= 0) {
                    players.innerHTML = serveurs_minecraft_org_players_count;
                    slots.innerHTML = serveurs_minecraft_org_slots_count;
                } else {
                    players.innerHTML = '?';
                    slots.innerHTML = '?';
                }
                if (serveurs_minecraft_org_is_online === true)
                    elt.innerHTML = "Serveur en ligne :)";
                else if (serveurs_minecraft_org_is_online === false)
                    elt.innerHTML = "Serveur hors ligne :/";
                else
                    elt.innerHTML = "Erreur 💩";
            }
        </script>
        <script src="<?="assets/js/copy.js"?>"></script>
        <script src="<?="assets/js/top.js"?>"></script>
        <script src="<?="assets/js/responsive.js"?>"></script>
    </body>
</html>