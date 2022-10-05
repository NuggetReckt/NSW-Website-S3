        </div>
        </main>
        <div class="footer-content">
            <footer class="footer">
                <ul class="footer-items" id="footer-l">
                    <li id="affilié" class="footer-item">
                        <span>Non affilié avec Mojang AB.</span>
                        <br>
                        <span>Site créé avec ❤ par NuggetReckt</span>
                    </li>
                    <br>
                    <li id="contact" class="footer-item">
                        <span>Nous contacter : </span>
                        <span class="bold">contact@noskillworld.fr</span>
                    </li>
                </ul>
                <ul class="footer-items" id="footer-r">
                    <li id="twitter-footer" class="footer-item">
                        <a href="https://twitter.com/NoSkillWorld" target="_blank">
                            <img src="<?php echo"/assets/images/twitter.svg"?>" alt="twitter" id="logo-f">
                        </a>
                    </li>
                    <li id="discord-footer" class="footer-item">
                        <a href="https://discord.gg/cE4eHEZWrD" target="_blank">
                            <img src="<?php echo"/assets/images/discord.svg"?>" alt="discord" id="logo-f">
                        </a
                    </li>
                </ul>
                <br>
                <br>
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
        <div id="scrollUp">
            <a href="#top"><img src="/assets/images/to_top.png" width="130%" alt="to-top"/></a>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
            jQuery(function () {
                $(function () {
                    $(window).scroll(function () { //Fonction appelée quand on descend la page
                        if ($(this).scrollTop() > 200) {  // Quand on est à 200pixels du haut de page,
                            $('#scrollUp').css('right', '4' +
                                '0px'); // Replace à 10pixels de la droite l'image
                        } else {
                            $('#scrollUp').removeAttr('style'); // Enlève les attributs CSS affectés par javascript
                        }
                    });
                });
            });
        </script>
        <script type="text/javascript"
                src="https://www.serveurs-minecraft.org/api/players_count.php?id=60934&format=jsonp"></script>
        <script type="text/javascript"
                src="https://www.serveurs-minecraft.org/api/slots_count.php?id=60934&format=jsonp"></script>
        <script type="text/javascript"
                src="https://www.serveurs-minecraft.org/api/is_online.php?id=60934&format=jsonp"></script>
        <script type="text/javascript">
            window.onload = function () {
                var players = document.getElementById("players_count");
                var slots = document.getElementById("slots_count");
                if (serveurs_minecraft_org_players_count >= 0 && serveurs_minecraft_org_slots_count >= 0) {
                    players.innerHTML = serveurs_minecraft_org_players_count;
                    slots.innerHTML = serveurs_minecraft_org_slots_count;
                } else {
                    players.innerHTML = '?';
                    slots.innerHTML = '?';
                }
                var elt = document.getElementById("is_online");
                if (serveurs_minecraft_org_is_online === true)
                    elt.innerHTML = "Serveur en ligne :)";
                else if (serveurs_minecraft_org_is_online === false)
                    elt.innerHTML = "Serveur hors ligne :/";
                else
                    elt.innerHTML = "Erreur 💩";
            }
        </script>
        <script>
            var btncopy = document.querySelector('.js-copy');

            if (btncopy) {
                btncopy.addEventListener('click', docopy);
            }

            function docopy() {
                var range = document.createRange();
                var target = this.dataset.target;
                var fromElement = document.querySelector(target);
                var selection = window.getSelection();

                range.selectNode(fromElement);
                selection.removeAllRanges();
                selection.addRange(range);

                try {
                    var result = document.execCommand('copy');
                    if (result) {
                        // La copie a réussi
                        alert('IP copiée avec succès ! Bon jeu sur NoSkillWorld !');
                    }
                } catch (err) {
                    // Une erreur est surevnue lors de la copie
                    alert(err);
                }

                selection = window.getSelection();

                if (typeof selection.removeRange === 'function') {
                    selection.removeRange(range);
                } else if (typeof selection.removeAllRanges === 'function') {
                    selection.removeAllRanges();
                }
            }
        </script>
    </body>
</html>