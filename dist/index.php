<!doctype html>
<html lang="fr-FR">
    <head>
        <?php
        $onglet_actif = "index";
        include('commons/head.php'); ?>
        <title>SHEGUEYLAND | Home</title>
    </head>
    <body>
        <?php include('commons/header.php'); ?>

        <div class="content">
            <div class="row">
                <div class="rect red shegueyMur">
                    <p>Le mur des #Sheguey<br/>Via instagram</p>
                    <a href="#"><div class="button">Découvre le mur</div></a>
                </div>
                <div class="rect empty no-mobile no-tablet"></div>
                <div class="rect black shegueyVideos">
                    <p>Lache ton «sheguey!!!!!»<br/>Sur instagram video</p>
                    <a href="#"><div class="button">Voir les vidéos</div></a>
                </div>
                <div class="rect lightgrey shegueyTweet">
                    <div class="tweetCard">
                        <h2>@Gradur</h2>
                        <p>«Qd jvoies cmt je suis essoufflé et j'en ai déjà marre du rap en à peine 1an. jpeux qu'avoir du respect pour ceux qui en sont à 4 ou 5 album.»</p>
                    </div>
                </div>
           
                <div class="rect lightgrey no-mobile no-tablet shegueyTweet">
                    <div class="tweetCard">
                        <h2>@Gradur</h2>
                        <p>«Qd jvoies cmt je suis essoufflé et j'en ai déjà marre du rap en à peine 1an. jpeux qu'avoir du respect pour ceux qui en sont à 4 ou 5 album.»</p>
                    </div>
                </div>
                <div class="rect black shegueyClickSheg">
                    <p>Click & Sheg'<br/>Le générateur de sons</p>
                    <a href="#"><div class="button">Lancer le générateur</div></a>
                </div>
                <div class="rect empty no-mobile no-tablet"></div>
                <div class="rect lightgrey owl-carousel owl-theme shegueySlideGradur">
                    <div><img src="img/1.jpg" alt=""></div>
                    <div><img src="img/2.jpg" alt=""></div>
                    <div><img src="img/3.jpg" alt=""></div>
                    <div><img src="img/4.jpg" alt=""></div>
                </div>
            
                <div class="rect black shegueyTweetTo">
                    <p>Envois un Tweet<br/> @Gradur</p>
                    <a href="#"><div class="button">Tweet maintenant !</div></a>
                </div>
                <div class="rect empty no-mobile no-tablet"></div>
                <div class="rect lightgrey owl-carousel owl-theme no-mobile shegueySlide">
                    <div><img src="img/5.jpg" alt=""></div>
                    <div><img src="img/6.jpg" alt=""></div>
                </div>
                <div class="rect red shegueyTest">
                    <p>Quel sheguey<br/>es-tu ?</p>
                    <a href="#"><div class="button">Fais le test</div></a>
                </div>
            
                <div class="rect empty no-mobile no-tablet"></div>
                <div class="rect black ShegueyBuyAlbum">
                    <p></p>
                    <!-- <img src="img/cover.jpg" alt="Gradur, l'album"> -->
                    <a href=""><div class="button">Achete l'album</div></a>
                </div>
                <div class="rect red ShegueyCalendar">
                    <p>Les évènements<br/>du mois</p>
                    <a href="#"><div class="button">Calendrier</div></a>
                </div>
                <div class="rect lightgrey owl-carousel owl-theme no-mobile no-tablet shegueySlide">
                    <div><img src="img/2.jpg" alt=""></div>
                </div>
            </div>
        </div>

        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>