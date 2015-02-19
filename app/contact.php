<!doctype html>
<html class="no-js" lang="fr-FR">
    <head>
        <?php
        $onglet_actif = "contact";
        $activeMenuContact = "class=\"activeMenu\"";
        include('commons/head.php'); ?>
        <title>SHEGUEYLAND - Contact</title>
    </head>
    <body>
        <?php include('commons/header.php'); ?>
        <header class="header">
            <h2>Contactez-nous</h2>
        </header>
        <div class="content">
            <div class="form red">
                <h3 class="title3">Le site Sheguey.Land n'est en aucun cas associé à Gradur, son équipe ou Universal Music France. Pour en savoir plus sur l'équipe ShegueyLand et ses motivations, n'hésitez pas à nous contacter.</h3>
                <div class="rangSheguey">
                    <h2></h2>
                </div>
                <form method="post" id="formContact">
                <fieldset>
                    <legend>Formulaire contact de ShegueyLand</legend>
                    <div>
                        <input type="text" placeholder="Ton ShegueyPrénom" name="name" id="formName">
                        <input type="email" placeholder="Ton ShegueyMail" name="email" id="formEmail">
                    </div>
                    <textarea cols="30" rows="10" placeholder="Ton ShegueyMessage" name="message" id="formMessage"></textarea>
                    <button type="submit" id="formSubmit">Envoyer</button>
                </fieldset>
                </form>
            </div>
        </div>
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>