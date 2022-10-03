        </div>
        </main>
        <div class="footer-content">
            <footer>
                <span>Copyright © No&Co 2022</span><br>
                <span>Développé avec ❤ par Corto Morrow</span>
            </footer>
        </div>
        <div id="scrollUp">
            <a href="#top"><img src="/assets/images/to_top.png" width="130%" alt="to-top"/></a>
        </div>
        <script>
            jQuery(function () {
                $(function () {
                    $(window).scroll(function () { //Fonction appelée quand on descend la page
                        if ($(this).scrollTop() > 200) {  // Quand on est à 200 pixels du haut de page,
                            $('#scrollUp')
                                .css('opacity', '0.75')
                        } else {
                            $('#scrollUp')
                                .removeAttr('style'); // Enlève les attributs CSS affectés par javascript
                        }
                    });
                });
            });
        </script>
    </body>
</html>