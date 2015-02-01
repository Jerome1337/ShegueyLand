<!doctype html>
<html lang="fr-FR">
    <head>
        <?php
        $onglet_actif = "index";
        $activeMenuIndex = "activeMenu";
        include('commons/head.php'); ?>
        <title>SHEGUEYLAND | Home</title>
    </head>
    <body>
        <?php include('commons/header.php'); ?>
        
        <div class="content">
            <div class="row">
                <div class="rect red shegueyMur">
                    <p>Le mur des #Sheguey<br/>Via instagram</p>
                    <a href="gallerie.php"><div class="button">Découvre le mur</div></a>
                </div>
                <div class="rect empty no-mobile no-tablet"></div>
                <div class="rect black shegueyVideos">
                    <p>Lache ton «sheguey!!!!!»<br/>Sur instagram video</p>
                    <a href="gallerie.php"><div class="button">Voir les vidéos</div></a>
                </div>
                <?php foreach ($tweets as $k => $tweet): ?>
                <div class="rect lightgrey shegueyTweet">
                    <div class="tweetCard">
                        <h2>@Gradur</h2>
                        <p><?php echo parseTweet($tweet->text); ?></p>
                    </div>
                </div>
                <?php endforeach ?>
                <div class="rect red shegueyClickSheg">
                    <p>Click & Sheg'<br/>Le générateur de sons</p>
                    <a href="clicknsheg.php"><div class="button">Lancer le générateur</div></a>
                </div>
                <?php foreach ($tweetsl as $k => $tweet): ?>
                <div class="rect lightgrey shegueyTweet">
                    <div class="tweetCard">
                        <h2>@ShegueyLand</h2>
                        <p><?php echo parseTweet($tweet->text); ?></p>
                    </div>
                </div>
                <?php endforeach ?>
                <div class="rect empty no-mobile no-tablet"></div>
                <div class="rect lightgrey owl-carousel owl-theme shegueySlideGradur">
                    <?php 
                        $reponse = $bdd->query('SELECT * FROM instagram WHERE type = \'image\' order by RAND() LIMIT 5');
                        while ($donnees = $reponse->fetch())
                        {
                            $media = $donnees['standard_resolution'];
                            $media_caption = $donnees['caption_text'];
                            echo'<div><img src="' . $media . '" alt="' . $media_caption . '"></div>';
                        }
                    ?>
                </div>
                <div class="rect black shegueyTweetTo">
                    <?php
                        $randomTweet = array();
                        $randomTweet[] = "%20www.sheguey.land";
                        $randomTweet[] = "%20www.sheguey.land";
                        $randomTweet[] = "%20www.sheguey.land";
                        $randomTweet[] = "%20@cahiips";
                        $randomTweet[] = "%20@MOneymaks";
                        $randomTweet[] = "%20www.sheguey.land";
                        $randomTweet[] = "%20@midosofficiel";
                        $randomTweet[] = "%20www.sheguey.land";
                        $randomTweet[] = "%20@Luissfernando17";
                    ?>
                    <p>Envois un Tweet<br/> @Gradur</p>
                    <a data-url="https://twitter.com/intent/tweet?screen_name=gradidur&text=%23ShegueyLand<?php echo $randomTweet[rand(0,count($randomTweet)-1)]?>&related=Shegueyland,gradidur,theHauteCulture" class="twitter"><div class="button">Tweet maintenant !</div></a>
                </div>
                <div class="rect empty no-mobile no-tablet"></div>
                <div class="rect lightgrey owl-carousel owl-theme no-mobile no-tablet shegueySlide">
                    <?php 
                        $reponse = $bdd->query('SELECT * FROM instagram WHERE type = \'image\' order by RAND() LIMIT 5');
                        while ($donnees = $reponse->fetch())
                        {
                            $media = $donnees['standard_resolution'];
                            $media_caption = $donnees['caption_text'];
                            echo'<div><img src="' . $media . '" alt="' . $media_caption . '"></div>';
                        }
                    ?>
                </div>
                <div class="rect red shegueyTest">
                    <p>Quel sheguey<br/>es-tu ?</p>
                    <a href="quelsheguey.php"><div class="button">Fais le test</div></a>
                </div>
            
                <div class="rect empty no-mobile no-tablet"></div>
                <div class="rect black ShegueyBuyAlbum">
                    <p></p>
                    <!-- <img src="img/cover.jpg" alt="Gradur, l'album"> -->
                    <a target="_blank" href="http://www.amazon.fr/gp/product/B00RDC5Y5O/ref=as_li_tl?ie=UTF8&camp=1642&creative=19458&creativeASIN=B00RDC5Y5O&linkCode=as2&tag=francemixtape-21&linkId=BLAT3PC4OXRC5SZP"><div class="button">Achete l'album</div></a>
                </div>
                <div class="rect red ShegueyCalendar">
                    <p>Viens ajouter ta<br/>punchline</p>
                    <a href="punch.php"><div class="button">Punchline</div></a>
                </div>
                <div class="rect lightgrey owl-carousel owl-theme no-mobile no-tablet shegueySlide">
                    <?php 
                        $reponse = $bdd->query('SELECT * FROM instagram WHERE type = \'image\' order by RAND() LIMIT 5');
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