<!doctype html>
<html class="no-js" lang="fr-FR">
    <head>
        <?php
        $onglet_actif = "quelsheguey";
        include('commons/head.php'); ?>
        <title>SHEGUEYLAND</title>
    </head>
    <body>
        <?php include('commons/nav.php'); ?>
        <div class="row">
            <div class="large-12 columns">
                <h1>Quel Sheguey es-tu ?</h1>
            </div>
        </div>
        <!-- QUIZZ -->
        <section class="presentation quizz">
            <div class="row">
                <div class="large-12 columns">
                    <div class="quizz">
                        <!-- Base quizz -->
                        <section id="startQuizz">
                            <h2>Decouvre quel Sheguey tu es !</h2>
                            <p id="launchQuizz">Commencer le test</p>
                        </section>
                        <!-- Quizz -->
                        <form id="formQuizz" method="POST">
                            <!-- Question 1 -->
                            <section id="q1" class="hide">
                                <h3>Depuis quand écoutes-tu Gradur ?</h3>
                                <div class="row">
                                    <div class="small-6 columns">
                                        <p id="setDate1">Le début</p>
                                    </div>
                                    <div class="small-6 columns">
                                        <p id="setDate2">La sortie de ShegueyVara</p>
                                    </div>
                                </div>
                            </section>
                            <!-- Question 2 -->
                            <section id="q2" class="hide">
                                <h3>Quel son aimes-tu le plus ?</h3>
                                <div class="row">
                                    <div class="small-6 columns">
                                        <p id="setLike1">Sortez les pepoms</p>
                                    </div>
                                    <div class="small-6 columns">
                                        <p id="setLike2">On est pas pas tout seul !</p>
                                    </div>
                                    <div class="small-6 columns">
                                        <p id="setLike3">Terraser</p>
                                    </div>
                                    <div class="small-6 columns">
                                        <p id="setLike3">Doggyner</p>
                                    </div>
                                </div>
                            </section>
                            <!-- Question 3 -->
                            <section id="q3" class="hide">
                                <h3>Quel extrait est dans "Doggyner" ?</h3>
                                <div class="row">
                                    <div class="small-6 columns">
                                        <p id="setExtrait1">"J'matte le cul d'ta racli"</p>
                                    </div>
                                    <div class="small-6 columns">
                                        <p id="setExtrait2">"Missile sol-air dans tes ovaires"</p>
                                    </div>
                                    <div class="small-6 columns">
                                        <p id="setExtrait3">"5.9 kils de pure à la pesée"</p>
                                    </div>
                                    <div class="small-6 columns">
                                        <p id="setExtrait4">"Mais si t'insultes maman das un son, j'prends dix ans"</p>
                                    </div>
                                </div>
                            </section>
                            <!-- Question 4 -->
                            <section id="q4" class="hide">
                                <h3>Dans le clip de quels rappeur US Gradur apparait ?</h3>
                                <div class="row">
                                    <div class="small-6 columns">
                                        <p id="setClip1">"Never Gonna Change" (Young Chop)</p>
                                    </div>
                                    <div class="small-6 columns">
                                        <p id="setClip2">"Coco" (O.T Genasis)</p>
                                    </div>
                                    <div class="small-6 columns">
                                        <p id="setClip3">"Gucci Gang" (Chief Keef)</p>
                                    </div>
                                    <div class="small-6 columns">
                                        <p id="setClip4">"Trenchez" (Migos)</p>
                                    </div>
                                </div>
                            </section>
                            <!-- Question 5 -->
                            <section id="q5" class="hide">
                                <h3>Quand est sortis la mixtape ShegueyVara sur Haute Culture ?</h3>
                                <div class="row">
                                    <div class="small-6 columns">
                                        <p id="setOut1">Le 9 octobre 2014</p>
                                    </div>
                                    <div class="small-6 columns">
                                        <p id="setOut2">Le 18 octobre 2014</p>
                                    </div>
                                    <div class="small-6 columns">
                                        <p id="setOut3">Le 4 novembre 2014</p>
                                    </div>
                                    <div class="small-6 columns">
                                        <p id="setOut4">Le 22 octobre 2014</p>
                                    </div>
                                </div>
                            </section>
                            <input type="hidden" id="date" name="date" class="hide">
                            <input type="hidden" id="like" name="like" class="hide">
                            <input type="hidden" id="extrait" name="extrait" class="hide">
                            <input type="hidden" id="clip" name="clip" class="hide">
                            <input type="hidden" id="out" name="out" class="hide">
                            <input type="submit" id="formSubmit" value="Decouvre quel Sheguey tu es !" class="hide">
                        </form>
                        <section id="resultForm" class="hide">
                            <h1 id="resultSheguey"></h1>
                            <h4></h4>
                            <span id="restartForm">Recommencer le test</span>
                            <div class="socialButtons">
                                <div class="socialfacebook">
                                    <a href="#" id="share_button">Partage sur Facebook</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- END QUIZZ -->
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>