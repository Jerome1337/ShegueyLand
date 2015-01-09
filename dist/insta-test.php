<!doctype html>
<html class="no-js" lang="fr-FR">
    <head>
        <?php
        $onglet_actif = "index";
        include('commons/head.php'); ?>
        <title>SHEGUEYLAND</title>
    </head>
    <body>
        <?php include('commons/nav.php'); ?>
        <div class="row">
            <div class="large-12 columns">
                <h1>Sheguey Squaad</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="large-12 columns">
                <?php
                require('commons/function.php');
                
                getInsta('image', 'sheguey', '3');
                
                // var_dump($data);
                
                // var_dump($data);
                ?>
            </div>
        </div>
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>