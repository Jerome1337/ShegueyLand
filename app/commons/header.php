<header class="menu_left">
    
        <h2 class="burger-icon black open">
            <a class="icon-align-justify" href="#"></a>
        </h2>
	
    <h1 class="logo">
    	<a href="index.php"><img src="img/logo.gif" alt="ShegueyLand"></a>
	</h1>

	<nav>
		<h2 class="burger-icon white open">
            <a href="#"></a>
        </h2>
		<ul>
			<li><a href="index.php">Accueil</a></li>
            <li><a href="gallerie.php">Le mur des #Sheguey</a></li>
			<li><a href="gallerie.php">Les #Sheguey Vidéos</a></li>
            <li><a href="clicknsheg.php">Click & Sheg</a></li>
            <li><a href="punch.php">Punchlines</a></li>
			<li><a href="#">Envois 1 Tweet @Gradur</a></li>
			<li><a href="contact.php"><small>Contacter ShegeyLand</small></a></li>
		</ul>
	</nav>
    <div class="shadowClose"></div>
</header>
<div id="fb-root"></div>
<?php
    $cache = 'cache/tweets.tmp';
    if(time() - filemtime($cache) > 60){
        require 'class/twitteroauth.php';
        $connection = new TwitterOAuth('ABScq6XifMwUz1zhJVHxlyEeg', 'q3ulKblNbaUTs0jiLjV9uhcoN0uBe1rOdcxS9EwjuWzT7jZkae', '179239110-JOhkMKzY8d09eIV6RqDlO5TV6p3gt6m9oPaE2ILF', 'RWBphBXKu4R4PtVMgrgQ5CnQvdFYXx25GtwRL6kAgRq9u');
        $tweets = $connection->get('statuses/user_timeline', array('user_id' => '1585757612', 'count' => '2', 'exclude_replies' => 'true', 'include_rts' => 'true', 'trim_user' => 'true', 'contributor_details' => 'true'));
        // $postTweet = $connection->post('statuses/update', array('status' => ''));
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