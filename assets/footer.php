        </div>
        </main>
        <div class="footer-content">
            <footer class="footer">
                <ul class="footer-items footer-item">
                    <li id="footer-l">
                        <span>Non affilié avec Mojang AB.</span>
                        <br>
                        <span>Site dev avec</span><span style="color: #ce0000"> ❤ </span><span>par NuggetReckt</span>
                        <br>
                        <span>Nous contacter:
                            <a href="mailto:contact@noskillworld.fr">contact@noskillworld.fr</a>
                        </span>
                    </li>
                    <li id="footer-r">
                        <a href="https://www.instagram.com/noskillworld/" target="_blank" id="insta-footer">
                            <img src="<?="/assets/images/instagram.svg"?>" alt="insta" id="logo-f">
                        </a>
                        <a href="https://twitter.com/NoSkillWorld" target="_blank" id="twitter-footer">
                            <img src="<?="/assets/images/twitter.svg"?>" alt="twitter" id="logo-f">
                        </a>
                        <a href="https://discord.gg/cE4eHEZWrD" target="_blank" id="discord-footer">
                            <img src="<?="/assets/images/discord.svg"?>" alt="discord" id="logo-f">
                        </a>
                    </li>
                </ul>
                <hr class="footer-item">
                <div class="sub-footer footer-item">
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