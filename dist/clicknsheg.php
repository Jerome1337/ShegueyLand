<!doctype html>
<html lang="fr-FR" manifest="cache/localSoundStorage.appcache">
    <head>
        <?php
        $onglet_actif = "noise";
        include('commons/head.php'); ?>
        <title>SHEGUEYLAND - Click & Sheg'</title>
    </head>
    <body>
        <?php include('commons/header.php'); ?>
        <div class="content">
            <div class="row">
            <?php 
                $reponse = $bdd->query('SELECT * FROM instagram WHERE type = \'image\' order by RAND()');
                while ($donnees = $reponse->fetch())
                {
                    $media = $donnees['standard_resolution'];
                    $photoInsta[] = $media;
                    
                }
                    // var_dump($photoInsta[]);
            ?>
                    <div class="rect red special" id="sheguey" style= "background-image: url('<?php echo $photoInsta[1] ?>')">SHEGUEY</div>
                    <div class="rect black special" id="missile" style= "background-image: url('<?php echo $photoInsta[2] ?>')">MISSILE</div>
                    <div class="rect lightgrey special" id="59" style= "background-image: url('<?php echo $photoInsta[3] ?>')">59</div>
                    <div class="rect red special" id="bitch" style= "background-image: url('<?php echo $photoInsta[4] ?>')">Bitch</div>
                    <div class="rect black special" id="jamais" style= "background-image: url('<?php echo $photoInsta[5] ?>')">jamais</div>
                    <div class="rect red special" id="jmatte" style= "background-image: url('<?php echo $photoInsta[6] ?>')">jmatte</div>
                    <div class="rect black special" id="papa" style= "background-image: url('<?php echo $photoInsta[7] ?>')">papa</div>
                    <div class="rect lightgrey special" id="patrimoine" style= "background-image: url('<?php echo $photoInsta[8] ?>')">patrimoine</div>
                    <div class="rect red special" id="pepoms" style= "background-image: url('<?php echo $photoInsta[9] ?>')">pepoms</div>
                    <div class="rect lightgrey special"id="rafale" style= "background-image: url('<?php echo $photoInsta[10] ?>')">rafale</div>
                    <div class="rect red special" id="sucer" style= "background-image: url('<?php echo $photoInsta[11] ?>')">sucer</div>
                    <div class="rect black special" id="terrain" style= "background-image: url('<?php echo $photoInsta[12] ?>')">terrain</div>
                    <div class="rect lightgrey special" id="tractions" style= "background-image: url('<?php echo $photoInsta[13] ?>')">Traction</div>
                    <div class="rect red special" id="tractions" style= "background-image: url('<?php echo $photoInsta[14] ?>')">Traction</div>
                    <div class="rect black special" id="tractions" style= "background-image: url('<?php echo $photoInsta[15] ?>')">Traction</div>
                    <div class="rect lightgrey special"id="tractions" style= "background-image: url('<?php echo $photoInsta[16] ?>')">Traction</div>
                
            </div>
        </div>
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>