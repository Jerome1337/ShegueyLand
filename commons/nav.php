<div class="contain-to-grid sticky" id="main-nav">
    <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large" id="nav">
        <ul class="title-area">
            <li class="name">
                <h1>
                <a href="index.php">SHEGUEY<span class="red">LAND</span></a>
                </h1>
            </li>
            <li class="toggle-topbar menu-icon">
                <a href="#"><span></span></a>
            </li>
        </ul>
        <section class="top-bar-section">
            <ul class="right">
                <li <?php if($onglet_actif == "index"){echo "class=\"active\"";}?>><a href="index.php">Accueil</a></li>
                <li <?php if($onglet_actif == "noise"){echo "class=\"active\"";}?>><a href="shegueynoise.php">Sheguey noise</a></li>
                <li <?php if($onglet_actif == "quelsheguey"){echo "class=\"active\"";}?>><a href="#">Quel Sheguey es-tu ?</a></li>
                <li <?php if($onglet_actif == "bio"){echo "class=\"active\"";}?>><a href="#">Biographie</a></li>
                <li <?php if($onglet_actif == "contacts"){echo "class=\"active\"";}?>><a href="#">Contacts</a></li>
            </ul>
        </section>
    </nav>
</div>