<!doctype html>
<html lang="fr-FR">
    <head prefix="og: http://ogp.me/ns#">
        <?php
        $onglet_actif = "quelsheguey";
        $activeMenuTest = "class=\"activeMenu\"";
        include('commons/head.php'); ?>
        <title>SHEGUEYLAND | Quel Sheguey es-tu ?</title>
    </head>
    <body>
        <?php include('commons/header.php'); ?>
        <header class="header">
            <h2>Quel Sheguey es-tu ?</h2>
        </header>
        <!-- QUIZZ -->
        <div class="content">
            <section class="row quel">
                <ul class="quizz">
                    <!-- Launch Form -->
                    <li class="active">
                        <h3 class="title3">Decouvre quel Sheguey tu es !</h3>
                        <div>
                            <h5 class="buttonPass start">Commencer le test</h5>
                        </div>
                    </li>
                    <!-- Question 1 -->
                    <li>
                        <h4 class="title3">Quel est le nom de la mixtape de Gradur ?</h4>
                        <div>
                            <h5 class="buttonPass">ShegueySquaad</h5>
                            <h5 class="buttonPass good">ShegueyVara</h5>
                            <h5 class="buttonPass">DoggynerTape</h5>
                            <h5 class="buttonPass">L'homme au bob</h5>
                        </div>
                    </li>
                    <!-- Question 2 -->
                    <li>
                        <h4 class="title3">D'ou vient Gradur ?</h4>
                        <div>
                            <h5 class="buttonPass">Roubaix</h5>
                            <h5 class="buttonPass">Wasquehal</h5>
                            <h5 class="buttonPass good">Hem</h5>
                            <h5 class="buttonPass">Sevran</h5>
                        </div>
                    </li>
                    <!-- Question 3 -->
                    <li>
                        <h4 class="title3">Qu'est ce qu'un ou une Sheguey ?</h4>
                        <div>
                            <h5 class="buttonPass">Un bicraveur de Sevran</h5>
                            <h5 class="buttonPass">Une racli</h5>
                            <h5 class="buttonPass">Une michto</h5>
                            <h5 class="buttonPass good">Un galérien Z</h5>
                        </div>
                    </li>
                    <!-- Question 4 -->
                    <li>
                        <h4 class="title3">Dans le clip de quels rappeur US Gradur apparait ?</h4>
                        <div>
                            <h5 class="buttonPass good">"Never Gonna Change" (Young Chop)</h5>
                            <h5 class="buttonPass">"Where it at" (Waka Flocka)</h5>
                            <h5 class="buttonPass">"Gucci Gang" (Chief Keef)</h5>
                            <h5 class="buttonPass">"Trenchez" (Migos)</h5>
                        </div>
                    </li>
                    <!-- Question 5 -->
                    <li>
                        <h4 class="title3">Quand est sorti la mixtape ShegueyVara sur <a target="_blank" href="http://www.hauteculture.com">HauteCulture</a>?</h4>
                        <div>
                            <h5 class="buttonPass final">Le 9 octobre 2014</h5>
                            <h5 class="buttonPass final">Le 18 octobre 2014</h5>
                            <h5 class="buttonPass final">Le 4 novembre 2014</h5>
                            <h5 class="buttonPass good final">Le 22 octobre 2014</h5>
                        </div>
                    </li>
                    <!-- Resultat -->
                    <li>
                        <div class="resultSheguey">
                            <h2>Félicitation,</h2>
                            <h3>Tu obtiens le grade de <span></span></h3>
                            <p></p>
                        </div>
                        <div class="socialfacebook">
                            <p id="share_button">Partage ton grade sur Facebook</p>
                            <div class="previewFb">
                                <div></div>
                                <h3>Tu obtiens le grade de <span></span></h3>
                                <p></p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="rect quizPic">
                    <?php 
                        $reponse = $bdd->query('SELECT * FROM instagram WHERE type = \'image\' order by RAND() LIMIT 1');
                        while ($donnees = $reponse->fetch())
                        {
                            $media = $donnees['standard_resolution'];
                            $media_caption = $donnees['caption_text'];
                            echo'<div><img src="' . $media . '" alt="' . $media_caption . '"></div>';
                        }
                    ?>
                </div>
            </section>
            
        </div>
        <!-- END QUIZZ -->
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>