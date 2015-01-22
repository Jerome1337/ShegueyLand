<!doctype html>
<html lang="fr-FR" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <head>
        <?php
        $onglet_actif = "quelsheguey";
        include('commons/head.php'); ?>
        <title>SHEGUEYLAND - Quel Sheguey es-tu ?</title>
    </head>
    <body>
        <?php include('commons/header.php'); ?>
        <div class="row">
            <div class="large-12 columns">
                <h2>Quel Sheguey es-tu ?</h2>
            </div>
        </div>
        <!-- QUIZZ -->
        <section class="quizz">
            <ul>
                <!-- Launch Form -->
                <li class="active">
                    <h3>Decouvre quel Sheguey tu es !</h3>
                    <button class="buttonPass">Commencer le test</button>
                </li>
                <!-- Question 1 -->
                <li>
                    <h4>Depuis quand écoutes-tu Gradur ?</h4>
                    <button class="buttonPass good">Le début</button>
                    <button class="buttonPass">La sortie de ShegueyVara</button>
                </li>
                <!-- Question 2 -->
                <li>
                    <h4>Quel son aimes-tu le plus ?</h4>
                    <button class="buttonPass">Sortez les pepoms</button>
                    <button class="buttonPass">On est pas pas tout seul !</button>
                    <button class="buttonPass good">Terraser</button>
                    <button class="buttonPass">Doggyner</button>
                </li>
                <!-- Question 3 -->
                <li>
                    <h4>Quel extrait est dans "Doggyner" ?</h4>
                    <button class="buttonPass">"J'matte le cul d'ta racli"</button>
                    <button class="buttonPass">"Missile sol-air dans tes ovaires"</button>
                    <button class="buttonPass good">"5.9 kils de pure à la pesée"</button>
                    <button class="buttonPass">"Mais si t'insultes maman das un son, j'prends dix ans"</button>
                </li>
                <!-- Question 4 -->
                <li>
                    <h4>Dans le clip de quels rappeur US Gradur apparait ?</h4>
                    <button class="buttonPass good">"Never Gonna Change" (Young Chop)</button>
                    <button class="buttonPass">"Coco" (O.T Genasis)</button>
                    <button class="buttonPass">"Gucci Gang" (Chief Keef)</button>
                    <button class="buttonPass">"Trenchez" (Migos)</button>
                </li>
                <!-- Question 5 -->
                <li>
                    <h4>Quand est sortis la mixtape ShegueyVara sur Haute Culture ?</h4>
                    <button class="buttonPass final">Le 9 octobre 2014</button>
                    <button class="buttonPass final">Le 18 octobre 2014</button>
                    <button class="buttonPass final">Le 4 novembre 2014</button>
                    <button class="buttonPass good final">Le 22 octobre 2014</button>
                </li>
                <!-- Resultat -->
                <li>
                    <div class="resultSheguey">
                        <h2>Félicitation</h2>
                        <h3>Tu obtiens le grade de <span></span></h3>
                    </div>
                    <button class="restartQuizz">Recommencer le test</button>
                    <div class="socialfacebook">
                        <a href="#" id="share_button">Partage sur Facebook</a>
                    </div>
                </li>
            </ul>
        </section>
        <!-- END QUIZZ -->
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>