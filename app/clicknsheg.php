<!doctype html>
<html lang="fr-FR" manifest="cache/localSoundStorage.appcache">
    <head>
        <?php
        $onglet_actif = "noise";
        include('commons/head.php'); ?>
        <title>SHEGUEYLAND - Click & Sheg</title>
    </head>
    <body>
        <?php include('commons/header.php'); ?>
        <div class="content">
            <div class="row">
                <div class="conteneur">
                    <div class="rect red special" id="sheguey">SHEGUEY</div>
                    <div class="rect lightgrey special" id="missile">MISSILE</div>
                    <div class="rect black special" id="59">MISSILE</div>
                    <div class="rect lightgrey special" id="bitch">MISSILE</div>
                </div>
                <div class="conteneur">
                    <div class="rect black special" id="jamais">jamais</div>
                    <div class="rect red special" id="jmatte">jmatte</div>
                    <div class="rect lightgrey special" id="papa">papa</div>
                    <div class="rect black special" id="patrimoine">patrimoine</div>
                </div>
                <div class="conteneur">
                    <div class="rect red special" id="pepoms">pepoms</div>
                    <div class="rect lightgrey special"id="rafale">rafale</div>
                    <div class="rect red special" id="sucer">sucer</div>
                    <div class="rect black special" id="terrain">terrain</div>
                </div>
                <div class="conteneur">
                    <div class="rect lightgrey special" id="tractions">Traction</div>
                    <div class="rect red special" id="tractions">Traction</div>
                    <div class="rect black special" id="tractions">Traction</div>
                    <div class="rect red special"id="tractions">Traction</div>
                </div>
            </div>
        </div>
        <section>
            <form action="#" method="post" id="formPunch">
                <input type="text" placeholder="Pseudo" name="mc" id="formMc">
                <textarea type="text" name="punch" id="addPunch" cols="30" rows="10" placeholder="Écris ta punchline"></textarea>
                <button type="submit" id="submitPunch">Poster</button>
            </form>
            <div id="punchAdded"></div>
        </section>
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>