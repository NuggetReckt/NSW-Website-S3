<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
$pager = new Pager("Accueil");
$req = new Request();

$pager->setHeader();
?>
            <div class="top-content" id="top-content-index">
                <div class="top-title" id="top-title-index">
                    <div class="top-title-content">
                        <img alt="logo" src="assets/images/logo_nsw.png" id="title-logo">
                        <h2 id="logo">NoSKillWorld</h2>
                        <h3>Serveur Minecraft Semi-RP</h3>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="sub-content" id="about-content">
                    <div class="row" id="row-up">
                        <div class="main-top-col-l main-top-col">
                            <span id="tocopy">play.noskillworld.fr</span>
                            <input type="button" value="        " class="js-copy" data-target="#tocopy">
                            <figcaption>
                                <span>Clique pour copier l'ip !</span>
                            </figcaption>
                        </div>
                        <div class="main-top-big main-top-col">
                            <span id="players_count"></span>&nbsp;<span>joueurs connectés / </span><span id="slots_count"></span>
                        </div>
                        <div class="main-top-col-b main-top-col">
                            <span id="is_online"></span>
                        </div>
                    </div>
                    <div class="row" id="row-mid">
                        <div class="flex-container" id="flex-container-l">
                            <div id="pres">
                                <h2 style="margin-top: 0">Presentation</h2>
                                <p>Bienvenue sur NoSkillWorld Saison 3 ! </p>
                                <p>Rejoins-nous avec tes amis ou solo pour vivre d'inoubliables aventures RP.
                                    Pourquoi RP ? Les joueurs peuvent communiquer entre eux directement dans le jeu via Mumble.
                                    De
                                    plus, l'absence de home rend l'éxpérience de jeu plus réaliste.</p>
                                <p>Le monde généré de manière customisée en minage comporte des paysages à couper le souffle et
                                    rend le minage plus fun ! Des events
                                    fréquents ainsi qu'un serveur Hardcore pimenteront ton aventure mélangeant adrénaline et
                                    satisfaction !
                                    Rejoins <span class="bold">play.noskillworld.fr</span> pour
                                    vivre de formidables aventures !</p>
                                <p style="margin-bottom: 0">Bon jeu sur NoSkillWorld !</p>
                            </div>
                            <h2>Actualites</h2>
                            <div class="actus-content">
                                <?php $req->get_actus();?>
                            </div>
                            <h2>Trailer Du serveur</h2>
                            <div id="yt-iframe">
                                <iframe id="yt-player" width="800" height="500" src="https://www.youtube.com/embed/jla-JXKSH_Y"
                                        title="YouTube video player"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="flex-container" id="flex-container-r">
                            <div id="discord-iframe">
                                <h2 id="h2-discord">Notre Discord</h2>
                                <iframe id="nsw-discord" src="https://discord.com/widget?id=700249004721700955&theme=light"
                                        width="800" height="500" allowtransparency="true" frameborder="none"
                                        sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts">
                                </iframe>
                                <div class="discord-widget-footer">
                                    <a id="discord-footer" href="https://discord.gg/cE4eHEZWrD"
                                       target="_blank"><span>Rejoins nous !</span></a>
                                </div>
                            </div>
                            <div id="twitter-iframe">
                                <h2 id="h2-twitter">Le Twitter</h2>
                                <a class="twitter-timeline" href="https://twitter.com/NoSkillWorld?ref_src=twsrc%5Etfw" data-height="500">Tweets
                                    de NoSkillWorld</a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
$pager->setFooter();
?>