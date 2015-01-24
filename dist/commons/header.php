<header>
	<h1>
	<a href="index.php">
		<img src="img/logo.gif" alt="ShegueyLand">
	</a>
	</h1>
	<nav class="anim">
		<h2><a class="icon-align-justify" href="#"></a></h2>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="clicknsheg.php">Click & Sheg</a></li>
			<li><a href="#">Le mur des Shegueys</a></li>
			<li><a href="punch.php">Punchlines</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</nav>
</header>
<div id="fb-root"></div>
<?php
    $cache = 'cache/tweetsgradur.tmp';
    $cachesl = 'cache/tweetsl.tmp';
    if(time() - filemtime($cache, $cachesl) > 60) {
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
        $text = preg_replace('# \#([a-z0-9_-]+)#i', ' <a target="_blank" href="http://search.twitter.com/search?q=%23$1">#$1</a>', $text); //Hashtags
        $text = preg_replace('#https://[a-z0-9._/-]+#i', '<a target="_blank" href="$0">$0</a>', $text); //Liens HTTPS
        return $text;
    }
?>