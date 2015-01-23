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
                <div class="rect lightgrey">
                
                    <?php 
                        $reponse = $bdd->query('SELECT * FROM instagram WHERE type = \'image\' order by RAND() LIMIT 40');
                        while ($donnees = $reponse->fetch())
                        {
                            $media = $donnees['standard_resolution'];
                            $media_caption = $donnees['caption_text'];
                            echo'<div><img src="' . $media . '" alt="' . $media_caption . '"></div>';
                        }
                    ?>

                </div>
            </div>
        </div>
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>