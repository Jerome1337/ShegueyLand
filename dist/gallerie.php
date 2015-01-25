<!doctype html>
<html lang="fr-FR">
    <head>
        <?php
        $onglet_actif = "gallerie";
        include('commons/head.php'); ?>
        <title>SHEGUEYLAND | Le Mur des Sheguey</title>
    </head>
    <body>
        <?php include('commons/header.php'); ?>
        
        

        <div class="content">
            <div class="row">
                
                
                    <?php 
                        $reponse = $bdd->query('SELECT * FROM instagram WHERE type = \'image\' order by id DESC LIMIT 10');
                        while ($donnees = $reponse->fetch())
                        {
                            $standard_resolution = $donnees['standard_resolution'];
                            $low_resolution = $donnees['low_resolution'];
                            $media_caption = $donnees['caption_text'];
                            $tags = $donnees['tags'];
                            $tag = explode(",", $tags);
                            ?>
                            <div class="rect lightgrey gallery">
                                <div style="background: url('<?php echo $low_resolution; ?>') ">
                                    <div class="likePic icon-like"></div>
                                    <?php 
                                        foreach ($tag as $actual_tag) {
                                           if($actual_tag==="shegueyland"){
                                                echo'<p>#sheguey<span>land</span></p>';
                                           }
                                        }
                                    ?>
                                    
                                </div>
                            </div>
                        <?php 
                        }
                    ?>

                
            </div>
        </div>
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>