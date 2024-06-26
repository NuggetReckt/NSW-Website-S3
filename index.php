<?php
require_once "assets/php/pager.php";
require_once "assets/php/database/request.php";
require_once "assets/php/server.php";
$pager = new Pager("Accueil");
$req = new Request();
$server = new Server();

$pager->setHeader();
?>
            <div class="top-content" id="top-content-index">
                <div class="top-title" id="top-title-index">
                    <div class="top-title-content">
                        <img alt="logo" src="assets/images/logo_nsw.png" id="title-logo">
                        <h2 id="logo">NoSkillWorld</h2>
                        <h3>Serveur Minecraft Semi-RP</h3>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="sub-content" id="about-content">
                    <div class="row" id="row-up">
                        <div class="main-top-col-l main-top-col">
                            <span id="tocopy">play.noskillworld.fr</span>
                            <input type="button" value="         " class="js-copy" data-target="#tocopy">
                            <figcaption>
                                <span>Clique pour copier l'ip !</span>
                            </figcaption>
                        </div>
                        <div class="main-top-big main-top-col">
                            <span><?= $server->getPlayerCount() ?></span>
                        </div>
                        <div class="main-top-col-b main-top-col">
                            <span><?= $server->getServerStatus() ?></span>
                        </div>
                    </div>
                    <div class="row" id="row-mid">
                        <div class="flex-container" id="flex-container-l">
                            <div id="pres">
                                <h2>À Propos</h2>
                                <p>Bienvenue sur NoSkillWorld Saison 3 !</p>
                                <p>
                                    Rejoignez une communauté florissante et lancez-vous dans une aventure unique !<br>
                                    Que ce soit avec ou sans vos amis, explorez le monde, créez votre Guilde,
                                    construisez votre ville, montez en rang d'honneur pour flex devant vos potes et
                                    découvrez l'univers que propose NoSkillWorld !
                                </p>
                                <p>
                                    En bref, NoSkillWorld c'est de la bonne ambiance, de l'aventure, de l'exploration et beaucoup de rigolade.
                                    Rejoins-nous dès maintenant en jeu sur <span class="bold">play.noskillworld.fr</span>
                                    pour vivre d'inoubliables aventures !
                                </p>
                                <p style="margin-bottom: 0">Bon jeu sur NoSkillWorld !</p>
                            </div>
                            <h2 id="actus">Actualités</h2>
                            <div class="actus-content">
                                <?php $req->get_actus() ?>
                            </div>
                            <h2>Trailer du serveur</h2>
                            <div id="youtube-iframe">
                                <iframe title="youtube-iframe" id="youtube-iframe" width="800" height="500" src="https://www.youtube.com/embed/jla-JXKSH_Y"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="flex-container" id="flex-container-r">
                            <div id="discord-iframe-content">
                                <h2 id="h2-discord">Notre Discord</h2>
                                <iframe title="discord-iframe" id="discord-iframe"
                                        src="https://discord.com/widget?id=700249004721700955&theme=light"
                                        width="800" height="500" allowtransparency="true"
                                        sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                                <div class="discord-iframe-footer-content">
                                    <a href="https://discord.gg/cE4eHEZWrD"
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