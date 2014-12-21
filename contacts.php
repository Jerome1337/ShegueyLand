<!doctype html>
<html class="no-js" lang="fr-FR">
    <head>
        <?php 
        $onglet_actif = "contacts";
        include('commons/head.php'); ?>
        <title>SHEGUEYLAND</title>
    </head>
    <body>
        <?php include('commons/nav.php'); ?>
        <div class="row">
            <div class="large-12 columns">
                <h1>Contacts</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="large-12 columns">
                <?php
                    $cache = 'cache/tweets.tmp';
                    if(time() - filemtime($cache) > 60){
                        require 'class/twitteroauth.php';
                        $connection = new TwitterOAuth('ABScq6XifMwUz1zhJVHxlyEeg', 'q3ulKblNbaUTs0jiLjV9uhcoN0uBe1rOdcxS9EwjuWzT7jZkae', '179239110-GarudRbmtNpNMS1ApCx5DmTAuV3NzCeUs4gdoZcq', 'rPdDESMAb74NkVnOfMOjowUXhr5iCMuCyyerfkKhJIfhe');
                        $tweets = $connection->get('statuses/user_timeline', array('user_id' => 1585757612), array('exclude_replies' => true));
                        file_put_contents($cache, serialize($tweets));
                        // var_dump($tweets);
                    }else{
                        echo "Cache utilisé";
                        $tweets = unserialize(file_get_contents($cache));
                    }
                ?>
                <ul class="pricing-table">
                <?php foreach ($tweets as $k => $tweet): ?>
                    <li class="bullet-item"><?= $tweet->text; ?></li>
                <?php endforeach ?>
                    <!-- <li>
                        <form action="#">
                            <input type="text" value="@GRADIDUR">
                            <button type="submit">Poster</button>
                        </form>
                    </li> -->
                </ul>
            </div>
        </div>
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>