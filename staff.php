<?php
require_once "assets/php/pager.php";
$pager = new Pager("Equipe");

$pager->setHeader();
?>
            <div class="top-content top-content-others" id="top-content-staff">
                <div class="top-title">
                    <h1 id="staff-title">L'équipe</h1>
                </div>
            </div>
            <div class="block">
                <h2 class="s-title" style="background-color: #AA0000">Administrateurs</h2>
                <ul class="staff-item">
                    <li class="li-staff">
                        <div class="user-box">
                            <img src="/assets/images/nuggetreckt.png" width="25%" height="25%"
                                 style="object-fit: contain;" class="avatar-half" alt="staff-img">
                            <span class="name">NuggetReckt</span>
                        </div>
                    </li>
                    <li class="li-staff">
                        <div class="user-box">
                            <img src="/assets/images/herbyvor.png" width="25%" height="25%" style="object-fit: contain;"
                                 class="avatar-half" alt="staff-img">
                            <span class="name">Herbyvor</span>
                        </div>
                    </li>
                    <li class="li-staff">
                        <div class="user-box">
                            <img src="/assets/images/Craftime_.png" width="25%" height="25%"
                                 style="object-fit: contain;"
                                 class="avatar-half" alt="staff-img">
                            <span class="name">Craftime_</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="block">
                <h2 class="s-title" style="background-color: #8100ff">Manager</h2>
                <ul class="staff-item">
                    <li class="li-staff">
                        <div class="user-box">
                            <img src="/assets/images/Atileur.png" width="25%" height="25%"
                                 style="object-fit: contain;" class="avatar-half" alt="staff-img">
                            <span class="name">Atileur</span>
                        </div>
                    </li>
                </ul>
            </div>
            <!---<div class="block">
                <h2 class="s-title" style="background-color: #ff6600">Responsable</h2>
                <ul class="staff-item">
                    <li class="li-staff">
                        <div class="user-box">
                            <img src="/assets/images/<nom>.png" width="25%" height="25%"
                                 style="object-fit: contain;" class="avatar-half" alt="staff-img">
                            <span class="name"><nom>(Resp. Mod)</span>
                        </div>
                    </li>
                </ul>
            </div>-->
            <div class="block">
                <h2 class="s-title" style="background-color: #7b55d5">Développeur</h2>
                <ul class="staff-item">
                    <li class="li-staff">
                        <div class="user-box">
                            <img src="/assets/images/Mamakse.png" width="25%" height="25%"
                                 style="object-fit: contain;"
                                 class="avatar-half" alt="staff-img">
                            <span class="name">Mamakse</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="block">
                <h2 class="s-title" style="background-color: #103cff">Equipe de modération</h2>
                <ul class="staff-item">
                    <li class="li-staff">
                        <div class="user-box">
                            <img src="/assets/images/Clo442.png" width="25%" height="25%" style="object-fit: contain;"
                                 class="avatar-half" alt="staff-img">
                            <span class="name">Clo442 (Modo)</span>
                        </div>
                    </li>
                    <li class="li-staff">
                        <div class="user-box">
                            <img src="/assets/images/nermax.png" width="25%" height="25%" style="object-fit: contain;"
                                 class="avatar-half" alt="staff-img">
                            <span class="name">Nermax (Modo)</span>
                        </div>
                    </li>
                    <li class="li-staff">
                        <div class="user-box">
                            <img src="/assets/images/Boomega.png" width="25%" height="25%" style="object-fit: contain;"
                                 class="avatar-half" alt="staff-img">
                            <span class="name">Boomega (Guide)</span>
                        </div>
                    </li>
                    <li class="li-staff">
                        <div class="user-box">
                            <img src="/assets/images/GAMBRINUS92.png" width="25%" height="25%"
                                 style="object-fit: contain;" class="avatar-half" alt="staff-img">
                            <span class="name">GAMBRINUS92 (Guide)</span>
                        </div>
                    </li>
                </ul>
            </div>
<?php
$pager->setFooter();
?>
