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
                    <div class="rect black clickSheg" id="jamais" style= "background-image: url('<?php echo $photoInsta[5] ?>')"><p>Jamais</p></div>
                    <div class="rect red clickSheg" id="jmatte" style= "background-image: url('<?php echo $photoInsta[6] ?>')"><p>J'matte</p></div>
                    <div class="rect red clickSheg" id="papa" style= "background-image: url('<?php echo $photoInsta[7] ?>')"><p>Papa</p></div>
                    <div class="rect red clickSheg" id="patrimoine" style= "background-image: url('<?php echo $photoInsta[8] ?>')"><p>Patrimoine</p></div>
                    <div class="rect black clickSheg" id="pepoms" style= "background-image: url('<?php echo $photoInsta[9] ?>')"><p>Pepoms</p></div>
                    <div class="rect red clickSheg"id="rafale" style= "background-image: url('<?php echo $photoInsta[10] ?>')"><p>Rafalé</p></div>
                    <div class="rect black clickSheg" id="sucer" style= "background-image: url('<?php echo $photoInsta[11] ?>')"><p>Sucer</p></div>
                    <div class="rect black clickSheg" id="terrain" style= "background-image: url('<?php echo $photoInsta[12] ?>')"><p>Terrain</p></div>
                    <div class="rect red clickSheg" id="tractions" style= "background-image: url('<?php echo $photoInsta[13] ?>')"><p>Tractions</p></div>
                    <div class="rect black clickSheg" id="enleger" style= "background-image: url('<?php echo $photoInsta[14] ?>')"><p>En leger</p></div>
                    <div class="rect red clickSheg" id="plaisante" style= "background-image: url('<?php echo $photoInsta[15] ?>')"><p>Plaisante</p></div>
                    <div class="rect black clickSheg"id="creche" style= "background-image: url('<?php echo $photoInsta[16] ?>')"><p>Crechent</p></div>
                    <div class="rect black clickSheg" id="defoncer" style= "background-image: url('<?php echo $photoInsta[17] ?>')"><p>Défoncé</p></div>
                    <div class="rect black clickSheg" id="quad" style= "background-image: url('<?php echo $photoInsta[18] ?>')"><p>Quad</p></div>
                    <div class="rect red clickSheg" id="mayday" style= "background-image: url('<?php echo $photoInsta[19] ?>')"><p>Mayday</p></div>
                    <div class="rect black clickSheg"id="grappe" style= "background-image: url('<?php echo $photoInsta[20] ?>')"><p>Grappe</p></div>
                
            </div>
        </div>
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>