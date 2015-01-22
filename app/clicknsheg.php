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
        <div class="row">
            <div class="large-12 columns">
                <h1>Click & Sheg'</h1>
            </div>
        </div>
        <section class="large-12 columns">
            <div class="conteneur">
                <button id="sheguey">sheguey</button>
                <button id="missile">missile</button>
                <button id="59">59</button>
                <button id="bitch">bitch</button>
            </div>
            <div class="conteneur">
                <button id="jamais">jamais</button>
                <button id="jmatte">jmatte</button>
                <button id="papa">papa</button>
                <button id="patrimoine">patrimoine</button>
            </div>
            <div class="conteneur">
                <button id="pepoms">pepoms</button>
                <button id="rafale">rafale</button>
                <button id="sucer">sucer</button>
                <button id="terrain">terrain</button>
            </div>
            <div class="conteneur">
                <button id="tractions">Traction</button>
                <button id="tractions">Traction</button>
                <button id="tractions">Traction</button>
                <button id="tractions">Traction</button>
            </div>
        </section>
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