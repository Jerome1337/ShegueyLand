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
            <div class="row sound">
            <?php 
                $reponse = $bdd->query('SELECT * FROM instagram WHERE type = \'image\' order by RAND()');
                while ($donnees = $reponse->fetch())
                {
                    $media = $donnees['standard_resolution'];
                    $photoInsta[] = $media;
                    
                }
                    // var_dump($photoInsta[]);
            ?>
                    <div class="rect red clickSheg" id="sheguey" style= "background-image: url('<?php echo $photoInsta[1] ?>')"><p>SHEGUEY</p></div>
                    <div class="rect black clickSheg" id="missile" style= "background-image: url('<?php echo $photoInsta[2] ?>')"><p>MISSILE</p></div>
                    <div class="rect red clickSheg" id="59" style= "background-image: url('<?php echo $photoInsta[3] ?>')"><p>59</p></div>
                    <div class="rect red clickSheg" id="bitch" style= "background-image: url('<?php echo $photoInsta[4] ?>')"><p>Bitch</p></div>
                    <div class="rect black clickSheg" id="jamais" style= "background-image: url('<?php echo $photoInsta[5] ?>')"><p>jamais</p></div>
                    <div class="rect red clickSheg" id="jmatte" style= "background-image: url('<?php echo $photoInsta[6] ?>')"><p>jmatte</p></div>
                    <div class="rect red clickSheg" id="papa" style= "background-image: url('<?php echo $photoInsta[7] ?>')"><p>papa</p></div>
                    <div class="rect red clickSheg" id="patrimoine" style= "background-image: url('<?php echo $photoInsta[8] ?>')"><p>patrimoine</p></div>
                    <div class="rect black clickSheg" id="pepoms" style= "background-image: url('<?php echo $photoInsta[9] ?>')"><p>pepoms</p></div>
                    <div class="rect red clickSheg"id="rafale" style= "background-image: url('<?php echo $photoInsta[10] ?>')"><p>rafale</p></div>
                    <div class="rect black clickSheg" id="sucer" style= "background-image: url('<?php echo $photoInsta[11] ?>')"><p>sucer</p></div>
                    <div class="rect black clickSheg" id="terrain" style= "background-image: url('<?php echo $photoInsta[12] ?>')"><p>terrain</p></div>
                    <div class="rect red clickSheg" id="tractions" style= "background-image: url('<?php echo $photoInsta[13] ?>')"><p>Traction</p></div>
                    <div class="rect black clickSheg" id="tractions" style= "background-image: url('<?php echo $photoInsta[14] ?>')"><p>Traction</p></div>
                    <div class="rect red clickSheg" id="tractions" style= "background-image: url('<?php echo $photoInsta[15] ?>')"><p>Traction</p></div>
                    <div class="rect black clickSheg"id="tractions" style= "background-image: url('<?php echo $photoInsta[16] ?>')"><p>Traction</p></div>
                
            </div>
        </div>
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>