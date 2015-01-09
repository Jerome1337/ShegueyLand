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
                    <div data-alert class="alert-box radius hide">
                        <a href="#" class="close">&times;</a>
                    </div>
                    <form action="#" method="post" id="formContact">
                        <input type="text" placeholder="Prénom" name="name" id="formName">
                        <input type="email" placeholder="Email" name="email" id="formEmail">
                        <input type="text" placeholder="Sujet" name="subject" id="formSubject">
                        <textarea cols="30" rows="10" placeholder="Ton message" name="message" id="formMessage"></textarea>
                        <button type="submit" id="formSubmit">Envoyer</button>
                    </form>
                    <div class="rangSheguey"></div>
                </div>
                <?php
                    $cache = 'cache/tweets.tmp';
                    if(time() - filemtime($cache) > 60){
                        require 'class/twitteroauth.php';
                        $connection = new TwitterOAuth('ABScq6XifMwUz1zhJVHxlyEeg', 'q3ulKblNbaUTs0jiLjV9uhcoN0uBe1rOdcxS9EwjuWzT7jZkae', '179239110-JOhkMKzY8d09eIV6RqDlO5TV6p3gt6m9oPaE2ILF', 'RWBphBXKu4R4PtVMgrgQ5CnQvdFYXx25GtwRL6kAgRq9u');
                        $tweets = $connection->get('statuses/user_timeline', array('user_id' => '1585757612', 'count' => '6', 'exclude_replies' => 'true', 'include_rts' => 'true', 'trim_user' => 'true', 'contributor_details' => 'true'));
                        $postTweet = $connection->post('statuses/update', array('status' => ''));
                        file_put_contents($cache, serialize($tweets));
                        // var_dump($postTweet);
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
                        <li class="bullet-item"><?php echo parseTweet($tweet->text); ?>
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