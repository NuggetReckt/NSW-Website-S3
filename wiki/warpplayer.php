<?php
require_once "assets/php/pager.php";

$pager = new WikiPager("WarpPlayer");

$pager->setHeader();
?>

    <div class="top-content top-content-others" id="top-content-wiki">
        <div class="top-wiki-nav">
            <h1>Les WarpPlayers</h1>
            <a href="/wiki">Revenir au Menu</a>
        </div>
    </div>
    <div class="wiki-content">
        <div class="table-of-contents-wiki" id="table-of-contents-wiki">
            <h3>Table des matières</h3>
            <ol class="table-wiki-list">
                <li class="table-wiki-item">
                    <a href="#1">Présentation</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#2">Créer son premier warp</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#2">Administrer son warp</a>
                </li>
                <li class="table-wiki-item">
                    <a href="#3">Interagir avec les autres warps</a>
                </li>
            </ol>
        </div>
        <div class="wiki-article">
            <div class="wiki-article-title">
                <h2 id="1">1. Présentation</h2>
                <hr>
            </div>
            <div class="wiki-article-content">
                <span>
                    Potenti suspendisse ipsum penatibus vitae iaculis adipiscing magna consectetur nisl sem cubilia dapibus nullam bibendum leo letius in nec eleifend malesuada sit phasellus litora mattis class finibus condimentum luctus magnis ultrices urna pede est accumsan interdum integer inceptos sed arcu efficitur aliquet tortor mus ridiculus odio dis commodo montes diam fusce netus maecenas aenean etiam metus enim nisi velit maximus elit vivamus mollis felis eget placerat lobortis euismod orci vulputate aliquam pulvinar tempus curabitur nam consectetuer mauris pharetra rhoncus viverra lorem facilisi augue et gravida ante venenatis justo lacinia purus vel ullamcorper duis neque fames fermentum imperdiet amet consequat
                </span>
            </div>
            <div class="wiki-article-title">
                <h2 id="2">2. Créer son premier warp</h2>
                <hr>
            </div>
            <div class="wiki-article-content">
                <span>
                    Potenti suspendisse ipsum penatibus vitae iaculis adipiscing magna consectetur nisl sem cubilia dapibus nullam bibendum leo letius in nec eleifend malesuada sit phasellus litora mattis class finibus condimentum luctus magnis ultrices urna pede est accumsan interdum integer inceptos sed arcu efficitur aliquet tortor mus ridiculus odio dis commodo montes diam fusce netus maecenas aenean etiam metus enim nisi velit maximus elit vivamus mollis felis eget placerat lobortis euismod orci vulputate aliquam pulvinar tempus curabitur nam consectetuer mauris pharetra rhoncus viverra lorem facilisi augue et gravida ante venenatis justo lacinia purus vel ullamcorper duis neque fames fermentum imperdiet amet consequat
                </span>
            </div>
            <div class="wiki-article-title">
                <h2 id="3">3. Administrer son warp</h2>
                <hr>
            </div>
            <div class="wiki-article-content">
                <span>
                    Potenti suspendisse ipsum penatibus vitae iaculis adipiscing magna consectetur nisl sem cubilia dapibus nullam bibendum leo letius in nec eleifend malesuada sit phasellus litora mattis class finibus condimentum luctus magnis ultrices urna pede est accumsan interdum integer inceptos sed arcu efficitur aliquet tortor mus ridiculus odio dis commodo montes diam fusce netus maecenas aenean etiam metus enim nisi velit maximus elit vivamus mollis felis eget placerat lobortis euismod orci vulputate aliquam pulvinar tempus curabitur nam consectetuer mauris pharetra rhoncus viverra lorem facilisi augue et gravida ante venenatis justo lacinia purus vel ullamcorper duis neque fames fermentum imperdiet amet consequat
                </span>
            </div>
            <div class="wiki-article-title">
                <h2 id="4">4. Interagir avec les autres warps</h2>
                <hr>
            </div>
            <div class="wiki-article-content">
                <span>
                    Potenti suspendisse ipsum penatibus vitae iaculis adipiscing magna consectetur nisl sem cubilia dapibus nullam bibendum leo letius in nec eleifend malesuada sit phasellus litora mattis class finibus condimentum luctus magnis ultrices urna pede est accumsan interdum integer inceptos sed arcu efficitur aliquet tortor mus ridiculus odio dis commodo montes diam fusce netus maecenas aenean etiam metus enim nisi velit maximus elit vivamus mollis felis eget placerat lobortis euismod orci vulputate aliquam pulvinar tempus curabitur nam consectetuer mauris pharetra rhoncus viverra lorem facilisi augue et gravida ante venenatis justo lacinia purus vel ullamcorper duis neque fames fermentum imperdiet amet consequat
                </span>
            </div>
        </div>
    </div>

<?php
$pager->setFooter();
?>