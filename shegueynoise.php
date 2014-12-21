<!doctype html>
<html class="no-js" lang="en">
    <head>
        <?php
        $onglet_actif = "noise";
        include('commons/head.php'); ?>
        <title>SHEGUEYLAND</title>
    </head>
    <body>
        <?php include('commons/nav.php'); ?>
        <div class="row">
            <div class="large-12 columns">
                <h1>Sheguey Noise</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="large-12 columns">
                <div class="conteneur">
                    <div onclick="playSheguey()" class="medium-4 large-4 columns"><img src="img/generateur/sheguey.jpg" alt="Sheguey Button"></div>
                    <div onclick="playMissile()" class="medium-4 large-4 columns"><img src="img/generateur/terrasser.png" alt="Sheguey Button"></div>
                    <div onclick="playMissile()" class="medium-4 large-4 columns"><img src="img/generateur/dani.jpg" alt="Sheguey Button"></div>
                </div>
                <div class="conteneur">
                    <div onclick="play59()" class="medium-4 large-4 columns"><img src="img/generateur/sheguey.jpg" alt="Sheguey Button"></div>
                    <div onclick="play59()" class="medium-4 large-4 columns"><img src="img/generateur/terrasser.png" alt="Sheguey Button"></div>
                    <div onclick="play59()" class="medium-4 large-4 columns"><img src="img/generateur/dani.jpg" alt="Sheguey Button"></div>
                </div>
                <div class="conteneur">
                    <div onclick="playPapa()" class="medium-4 large-4 columns"><img src="img/generateur/sheguey.jpg" alt="Sheguey Button"></div>
                    <div onclick="playPapa()" class="medium-4 large-4 columns"><img src="img/generateur/terrasser.png" alt="Sheguey Button"></div>
                    <div onclick="playPapa()" class="medium-4 large-4 columns"><img src="img/generateur/dani.jpg" alt="Sheguey Button"></div>
                </div>
                <div class="conteneur">
                    <div onclick="playJmatte()" class="medium-4 large-4 columns"><img src="img/generateur/sheguey.jpg" alt="Sheguey Button"></div>
                    <div onclick="playJmatte()" class="medium-4 large-4 columns"><img src="img/generateur/terrasser.png" alt="Sheguey Button"></div>
                    <div onclick="playJmatte()" class="medium-4 large-4 columns"><img src="img/generateur/dani.jpg" alt="Sheguey Button"></div>
                </div>
                <!--  <button onclick="playSheguey()" class="medium-4 large-4 columns">SHEGUEY</button>
                <button onclick="playMissile()" class="medium-4 large-4 columns">MISSILE SOL-AIR</button>
                <button onclick="play59()" class="medium-4 large-4 columns">5.9 KILS DE PURE</button>
                <button onclick="play59()" class="medium-4 large-4 columns">5.9 KILS DE PURE</button>
                <button onclick="playPapa()" class="medium-4 large-4 columns">PAPA VEUT DU BIFF</button>
                <button onclick="playJmatte()" class="medium-4 large-4 columns">J'MATTE LE CUL D'TA RACLI</button>
                <button onclick="playJmatte()" class="medium-4 large-4 columns">J'MATTE LE CUL D'TA RACLI</button>
                <button onclick="playJmatte()" class="medium-4 large-4 columns">J'MATTE LE CUL D'TA RACLI</button>
                <button onclick="playJmatte()" class="medium-4 large-4 columns">J'MATTE LE CUL D'TA RACLI</button>
                <button onclick="playJmatte()" class="medium-4 large-4 columns">J'MATTE LE CUL D'TA RACLI</button>
                <button onclick="playJmatte()" class="medium-4 large-4 columns">J'MATTE LE CUL D'TA RACLI</button>
                <button onclick="playJmatte()" class="medium-4 large-4 columns">J'MATTE LE CUL D'TA RACLI</button> -->
            </div>
        </div>
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>