<!doctype html>
<html class="no-js" lang="fr-FR">
    <head>
        <?php 
        $onglet_actif = "contacts";
        include('commons/head.php'); ?>
        <title>CONTACTS / SHEGUEYLAND</title>
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
                <div class="large-6 columns">
                    <div data-alert class="alert-box radius">
                        <a href="#" class="close">&times;</a>
                    </div>
                    <form action="#" method="POST" id="formContact">
                        <input type="text" placeholder="Prénom" name="formName" id="formName">
                        <input type="email" placeholder="Email" name="formEmail" id="formEmail">
                        <input type="text" placeholder="Sujet" name="formSubject" id="formSubject">
                        <textarea cols="30" rows="10" placeholder="Ton message" name="formMessage" id="formMessage"></textarea>
                        <button type="submit">Envoyer</button>
                    </form>
                    <div class="rangSheguey"></div>
                </div>
                <?php
                    $cache = 'cache/tweets.tmp';
                    if(time() - filemtime($cache) > 60){
                        require 'class/twitteroauth.php';
                        $connection = new TwitterOAuth('ABScq6XifMwUz1zhJVHxlyEeg', 'q3ulKblNbaUTs0jiLjV9uhcoN0uBe1rOdcxS9EwjuWzT7jZkae', '179239110-GarudRbmtNpNMS1ApCx5DmTAuV3NzCeUs4gdoZcq', 'rPdDESMAb74NkVnOfMOjowUXhr5iCMuCyyerfkKhJIfhe');
                        $tweets = $connection->get('statuses/user_timeline', array('user_id' => '1585757612', 'count' => '6', 'exclude_replies' => 'true', 'include_rts' => 'true', 'trim_user' => 'true', 'contributor_details' => 'true'));
                        file_put_contents($cache, serialize($tweets));
                        // var_dump($tweets);
                    }else{
                        // echo "Cache utilisé";
                        $tweets = unserialize(file_get_contents($cache));
                    }
                ?>
                <?php
                    function parseTweet($text) {
                        $text = preg_replace('#http://[a-z0-9._/-]+#i', '<a target="_blank" href="$0">$0</a>', $text); //Liens HTTP
                        $text = preg_replace('#@([a-z0-9_]+)#i', '<a target="_blank" href="http://twitter.com/$1">@$1</a>', $text); //Pseudos
                        $text = preg_replace('# \#([a-z0-9_-]+)#i', ' <a target="_blank" href="http://search.twitter.com/search?q=%23$1">#$1</a>', $text); //Hashtags
                        $text = preg_replace('#https://[a-z0-9._/-]+#i', '<a target="_blank" href="$0">$0</a>', $text); //Liens HTTPS
                        return $text;
                    }
                ?>
                <div class="large-6 columns">
                    <ul class="pricing-table">
                    <?php foreach ($tweets as $k => $tweet): ?>
                        <li class="bullet-item"><?php echo parseTweet($tweet->text); ?></li>
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
        </div>
        <?php include('commons/footer.php'); ?>
        <?php include('commons/script_bottom.php'); ?>
    </body>
</html>