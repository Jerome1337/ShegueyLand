<header class="menu_left">
    
        <h2 class="burger-icon black open">
            <a href="#"></a>
        </h2>
	
    <h1 class="logo">
    	<a href="index.php"><img src="img/logo.png" alt="ShegueyLand"></a>
	</h1>

	<nav>
		<h2 class="burger-icon white open">
            <a href="#"></a>
        </h2>
		<ul>
            <?php
                $randomTweet = array();
                $randomTweet[] = "%20www.sheguey.land";
                $randomTweet[] = "%20www.sheguey.land";
                $randomTweet[] = "%20www.sheguey.land";
                $randomTweet[] = "%20www.sheguey.land";
                $randomTweet[] = "%20www.sheguey.land";
                $randomTweet[] = "%20@cahiips";
                $randomTweet[] = "%20@MOneymaks";
                $randomTweet[] = "%20@midosofficiel";
                $randomTweet[] = "%20@Luissfernando17";
            ?>
			<li><a href="index.php" class="<?php echo $activeMenuIndex ?>">Accueil</a></li>
            <li><a href="gallerie.php" class="<?php echo $activeMenuGallerie ?>">Le mur des #Sheguey</a></li>
			<!-- <li><a href="gallerie.php">Les #Sheguey Vidéos</a></li> -->
			<li><a href="quelsheguey.php" class="<?php echo $activeMenuTest ?>">Quel Sheguey es-tu ?</a></li>
            <li><a href="clicknsheg.php" class="<?php echo $activeMenuClick ?>">Click & Sheg</a></li>
            <li><a href="punch.php" class="<?php echo $activeMenuPunch ?>">Punchlines</a></li>
			<li><a data-url="https://twitter.com/intent/tweet?screen_name=gradidur&text=%23ShegueyLand<?php echo $randomTweet[rand(0,count($randomTweet)-1)]?>&related=Shegueyland,gradidur,theHauteCulture,Luissfernando17,MOneymaks,cahiips,midosofficiel" class="twitter">Envois 1 Tweet @Gradur</a></li>
            <li><a href="contact.php" class="<?php echo $activeMenuContact ?>"><small>Contacter ShegeyLand</small></a></li>
		</ul>
        <div class="socialIcons">
            <a href="https://twitter.com/ShegueyLand" target="_blank"><small class="twitterIcon socialIcon red"></small></a>
            <a href="https://www.facebook.com/ShegueyLand" target="_blank"><small class="facebookIcon socialIcon red"></small></a>
        </div>
	</nav>
    <div class="shadowClose"></div>
</header>
<div id="fb-root"></div>
<?php
    $cache = 'cache/tweetsgradur.tmp';
    $cachesl = 'cache/tweetsl.tmp';
    if((time() - filemtime($cache) > 60) && (time() - filemtime($cachesl) > 60) ){
        require 'adm/twitteroauth.php';
        $connection = new TwitterOAuth('ABScq6XifMwUz1zhJVHxlyEeg', 'q3ulKblNbaUTs0jiLjV9uhcoN0uBe1rOdcxS9EwjuWzT7jZkae', '179239110-JOhkMKzY8d09eIV6RqDlO5TV6p3gt6m9oPaE2ILF', 'RWBphBXKu4R4PtVMgrgQ5CnQvdFYXx25GtwRL6kAgRq9u');
        $tweets = $connection->get('statuses/user_timeline', array('user_id' => '1585757612', 'count' => '1', 'exclude_replies' => 'true', 'include_rts' => 'true', 'trim_user' => 'true', 'contributor_details' => 'true'));
        $tweetsl = $connection->get('statuses/user_timeline', array('user_id' => '2981065781', 'count' => '1', 'exclude_replies' => 'true', 'include_rts' => 'true', 'trim_user' => 'true', 'contributor_details' => 'true'));
        file_put_contents($cache, serialize($tweets));
        file_put_contents($cachesl, serialize($tweetsl));
        // var_dump($tweets);
    }else{
        // echo "Cache utilisé";
        $tweets = unserialize(file_get_contents($cache));
        $tweetsl = unserialize(file_get_contents($cachesl));
    }
    function parseTweet($text) {
        $text = preg_replace('#http://[a-z0-9._/-]+#i', '<a target="_blank" href="$0">$0</a>', $text); //Liens HTTP
        $text = preg_replace('#@([a-z0-9_]+)#i', '<a target="_blank" href="http://twitter.com/$1">@$1</a>', $text); //Pseudos
        $text = preg_replace('# \#([a-z0-9_-]+)#i', ' <a target="_blank" href="http://twitter.com/hashtag/$1">#$1</a>', $text); //Hashtags
        $text = preg_replace('#https://[a-z0-9._/-]+#i', '<a target="_blank" href="$0">$0</a>', $text); //Liens HTTPS
        return $text;
    }
?>