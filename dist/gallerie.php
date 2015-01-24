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
                            $media = $donnees['standard_resolution'];
                            $media_caption = $donnees['caption_text'];
                            ?>
                            <div class="rect lightgrey gallery">
                                <div>
                                    <img src="<?php echo $media; ?>" alt="<?php echo $media_caption; ?>">
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