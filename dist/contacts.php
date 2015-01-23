<!doctype html>
<html class="no-js" lang="fr-FR">
    <head>
        <?php
        $onglet_actif = "contacts";
        include('commons/head.php'); ?>
        <title>SHEGUEYLAND - Contact</title>
    </head>
    <body>
        <?php include('commons/header.php'); ?>
        <div class="row">
            <div class="large-12 columns">
                <h1>Contacts</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="large-12 columns">
                <div class="large-6 columns">
                    <div data-alert class="alert-box radius hide">
                        <a href="#" class="close">&times;</a>
                    </div>
                    <form method="post" id="formContact">
                        <input type="text" placeholder="Prénom" name="name" id="formName">
                        <input type="email" placeholder="Email" name="email" id="formEmail">
                        <input type="text" placeholder="Sujet" name="subject" id="formSubject">
                        <textarea cols="30" rows="10" placeholder="Ton message" name="message" id="formMessage"></textarea>
                        <button type="submit" id="formSubmit">Envoyer</button>
                    </form>
                    <div class="rangSheguey"></div>
                </div>
                <div>
                    <ul>
                        <?php foreach ($tweets as $k => $tweet): ?>
                        <li><?php echo parseTweet($tweet->text); ?>
                            <div class="bloc_caption">
                                <span class="timestamp tw_timestamp"><?php echo date("d M - H:i",strtotime($tweet->created_at)); ?></span>
                            </div>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>