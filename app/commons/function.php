<?php

	function saveImageOrVid($contenu){
		include('adm/bddconnect.php');

			
			$typeFormat = $contenu->type;
			if ($typeFormat == 'image'){
				$realTypeFormat = "images";
			} 
			elseif ($typeFormat == 'video'){
				$realTypeFormat = "videos";
			} 
			
			
			foreach ($contenu->tags as $tag) {
				if($tag === "sheguey" || $tag ==="shegueyland" || $tag ==="shegueysse" || $tag ==="missshegueyland")
				{
					$tags[] = $tag;
				}
			}

			if(isset($tags)){
				$savableTags = implode(",",$tags);
			} else {
				$savableTags= "";
			}
			
			// Saving image format

			$req = $bdd->prepare('	INSERT INTO instagram(id_insta, standard_resolution, low_resolution, tags, caption_text, username, type, link) 
									VALUES(:id_insta, :standard_resolution, :low_resolution, :tags, :caption_text, :username, :type, :link)');
			$req->execute(array(
				'id_insta' => $contenu->id,
				'standard_resolution' => $contenu->$realTypeFormat->standard_resolution->url,
				'low_resolution' => $contenu->$realTypeFormat->low_resolution->url,
				'caption_text' => $contenu->caption->text,
				'tags' => $savableTags,
				'username' => $contenu->user->username,
				'type' => $contenu->type,
				'link' => $contenu->link
				));

		if ($typeFormat == 'image') {

		    echo"<img src='{$contenu->images->standard_resolution->url}' width='80'>";
		
		} elseif($typeFormat == 'video') {

		    echo"<video width='80' height='80' controls>
		          <source src='{$contenu->videos->standard_resolution->url}' type='video/mp4'>
		          Your browser does not support the video tag.
		        </video>";
		}
	}



 
	function getInsta($type, $tag, $limit){
		include('adm/bddconnect.php');

		// $cache = 'cache/index.json';
		// $expire = time() -10 ; // 3600 valable une heure
		$client_id = "132efb02e32f4d80bb641c00c8f9c118";
		$user_id = "1341194982";
		$endpoint = "https://api.instagram.com/v1/tags/$tag/media/recent/?client_id=$client_id&count=$limit";

		// if(file_exists($cache) && filemtime($cache) > $expire)
		// {

		// 	echo("lecture cache \n");

		//         // var_dump(json_decode($cache,true));
		//             $images = json_decode(file_get_contents($cache),true); //Decode as an json array
		//             echo ($images);
		//             var_dump($images);
		// }
		// else
		// {
			
	        // ob_start(); // ouverture du tampon

	        try {
			    $curl = curl_init($endpoint);
			    curl_setopt($curl, CURLOPT_TIMEOUT, 3);
			    curl_setopt($curl, CURLOPT_RETURNTRANSFER , true);
			    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER  , false);
			    
			    $data = json_decode(curl_exec($curl));
			    $oldata = curl_exec($curl);
			
			} catch (Exception $e) {
			    die($e->getMessage());
			}

			if(empty($data)){
				$buug = "Aucune DATA retournee";
				echo"Aucune DATA retournee";
				return $buug;
			}
			if($data->meta->code == 200){

			    foreach ($data->data as $contenu) {
			    	$id_insta_actuel = $contenu->id;
		    		

		    		$req = $bdd->prepare('SELECT count(id) AS nbre_occurences FROM instagram WHERE id_insta = :id_insta_actuel');
		    		$req->execute(array('id_insta_actuel' => $id_insta_actuel));
		    		 
		    		$donnees = $req->fetch();
		    		$nbre_occurences = $donnees['nbre_occurences'];
		    		$req->closeCursor();
		    		     
		    		if ($nbre_occurences == 0)
		    		{
		    			echo"S";
    						saveImageOrVid($contenu);
		    		}
		    		else
		    		{
		    		     echo"E";
		    		}
 
			    }
			    

			} else {
			    echo "impossible de recupérer les images...";
			}
	        
	        // $page = ob_get_contents(); // copie du contenu du tampon dans une chaîne
	        // ob_end_clean(); // effacement du contenu du tampon et arrêt de son fonctionnement
	        
	        // file_put_contents($cache, $oldata) ; // on écrit la chaîne précédemment récupérée ($page) dans un fichier ($cache) 
	        // echo $page ; // on affiche notre page :D 
		}
	// }


			if(isset($_POST['getMoreSheguey'])){
				$getMoreSheguey = $_POST['getMoreSheguey'];
				$type = $_POST['typeData'];
				$orderBy = $_POST['orderBy'];
				$orderBy = $orderBy == 'recent' ? 'id DESC' : 'vote DESC';
				$contentLength = $_POST['contentLength'];
				getMoreSheguey($getMoreSheguey, $type, $orderBy, $contentLength );
			}

			function getMoreSheguey($last_id, $type, $orderBy, $contentLength){
			include('../adm/bddconnect.php');
				
				if($type==="images"){
					$reponse = $bdd->query('SELECT * FROM instagram WHERE type = \'image\' AND id < '.$last_id.' order by '.$orderBy.' LIMIT '.$contentLength.'');
				} elseif ($type==="videos"){
					$reponse = $bdd->query('SELECT * FROM instagram WHERE type = \'video\' AND id < '.$last_id.' order by '.$orderBy.' LIMIT '.$contentLength.'');
				} elseif($type==="both"){
					$reponse = $bdd->query('SELECT * FROM instagram WHERE id < '.$last_id.' order by '.$orderBy.' LIMIT '.$contentLength.'');
				}

				while ($donnees = $reponse->fetch())
				{
                    $id = $donnees['id'];
                    $standard_resolution = $donnees['standard_resolution'];
                    $low_resolution = $donnees['low_resolution'];
                    $media_caption = $donnees['caption_text'];
                    $actual_type = $donnees['type'];
                    $tags = $donnees['tags'];
                    $tag = explode(",", $tags);

	                    if($actual_type==="image"){
	                    ?>

	                    <div class="rect lightgrey gallery">
	                        <div style="background: url('<?php echo $low_resolution; ?>') ">
	                            <div data-id="<?php echo $id; ?>" class="likePic icon-like"></div>
	                            <?php 
	                                foreach ($tag as $actual_tag) {
	                                   if($actual_tag==="shegueyland"){
	                                        echo'<p>#sheguey<span>land</span></p>';
	                                   }
	                                }
	                            ?>
	                            
	                        </div>
	                    </div>
	                	<?php 
            			} 
            				elseif ($actual_type==="video"){
	                    ?>

	                    <div class="rect lightgrey gallery video">
                            <div data-id="<?php echo $id; ?>" class="likePic"></div>
                            <?php 
                                foreach ($tag as $actual_tag) {
                                   if($actual_tag==="shegueyland"){
                                        echo'<p>#sheguey<span>land</span></p>';
                                   }
                                }
                            ?>
	                        <video src="<?php echo $low_resolution; ?>" controls>
	                        </video>
	                    </div>
	                	<?php 
            			} 
                }
			}


if(isset($_POST['vote_media_ID'])){
	$vote_media_ID = 	securite_bdd($_POST['vote_media_ID']);
	$ip_client = 		$_SERVER["REMOTE_ADDR"];

	saveVoteMedia($ip_client, $vote_media_ID);
	// $nb_modifs = $bdd->exec('UPDATE instagram SET vote = vote+1 WHERE id = '.$vote_media_ID.'');
	// echo $nb_modifs . ' entrées ont été modifiées !';

}


function saveVoteMedia($ip_client, $vote_media_ID){
	include('../adm/bddconnect.php');
	//SI l ip nexiste pas encore
	$req = $bdd->prepare('SELECT count(id) AS ip_exist FROM vote WHERE ip = :ip_client');
	$req->execute(array('ip_client' => $ip_client));
	 
	$donnees = $req->fetch();
	$ip_exist = $donnees['ip_exist'];
	if ($ip_exist == "0"){ // Si l ip nexiste pas
		// echo"IP EXISTE PAS";
		$req = $bdd->prepare('INSERT INTO vote(id_media, ip) VALUES(:id_media, :ip)');
		$req->execute(array(
			'id_media' => $vote_media_ID,
			'ip' => $ip_client
			));
		$plusUn = $bdd->exec('UPDATE instagram SET vote=vote+1 WHERE id = '.$vote_media_ID.'');


	} else { // Si l'ip existe deja on verifie sil na pas vote
		$req = $bdd->prepare('SELECT * FROM vote WHERE ip = :ip_client');
		$req->execute(array('ip_client' => $ip_client));
			while ($donnees = $req->fetch())
			{
				$id = $donnees['id'];
				$id_medias = $donnees['id_media'];
				$id_media = explode(",", $id_medias);

                foreach ($id_media as $votedFor) {  //on boucle sur tous ses votes
                   if($votedFor == $vote_media_ID){
                   	return false;  // return fal s'il a deja voté
                   }
               	}
            	$new_id_medias = "$vote_media_ID,$id_medias";
           		$save_new_vote = $bdd->prepare('UPDATE vote SET id_media = :new_id_medias WHERE id = :id');
            	$save_new_vote->execute(array('new_id_medias' => $new_id_medias, 'id' => $id));
        		$plusUn = $bdd->exec('UPDATE instagram SET vote=vote+1 WHERE id = '.$vote_media_ID.'');
        	}
	}
	$req->closeCursor();

	// $reponse = $bdd->query('SELECT * FROM vote WHERE ip = '.$ip_client.'');
	// while ($donnees = $reponse->fetch())
	// {

	// }

	// $save_ip = $bdd->exec('UPDATE vote SET vote = vote+1 WHERE id = '.$vote_media_ID.'');
}




if(isset($_POST['mc']) && isset($_POST['punch'])){
	$mc = $_POST['mc'];
	$punch = $_POST['punch'];
	$ip_client = $_POST['ip_client'];

	addPunchline($mc, $punch, $ip_client);
}

function addPunchline($mc, $punch, $ip_client){
	include('../adm/bddconnect.php');
	$data = array();
	if (!empty($mc) && !empty($punch))
			{
				$checkLastDatePunchline = checkLastDatePunchline($ip_client);
				
				if($checkLastDatePunchline == true){
					$req = $bdd->prepare('INSERT INTO punchline (name, punch, time, ip_client) VALUES( :mc, :punch,:time, :ip_client)');
					$req->execute(array(
							'mc' => $mc,
							'punch' => $punch,
							'time' => time(),
							'ip_client' => $ip_client
						));
					$data['success'] = true;	
				}
			}else{
				$data['success'] = false;
			}
			echo json_encode($data);
}

function checkLastDatePunchline($ip_client){
	include('../adm/bddconnect.php');
	$req = $bdd->prepare('SELECT count(id) AS ip_exist FROM punchline WHERE ip_client = :ip_client');
	$req->execute(array('ip_client' => $ip_client));
	$donnees = $req->fetch();
	$ip_exist = $donnees['ip_exist'];
	$actual_date = time();
	
	// Si l'ip existe on check le time du last post
	if($ip_exist >= 1){
		
		$req = $bdd->prepare('SELECT * FROM punchline WHERE ip_client = :ip_client ORDER BY id DESC LIMIT 0 , 1 ');
		$req->execute(array('ip_client' => $ip_client));
			while ($donnees = $req->fetch())
			{
				$id = $donnees['id'];
				$postedTime = $donnees['time'];
				$interval = ( $actual_date - $postedTime );
				// echo ("actual : $actual_date\n");
				// echo ("postedTime : $postedTime\n");
				// echo ("INTERV : $interval\n");

				if($interval < "60"){
				 echo "moins 60!!!"; return false; 
				} else {
					return true;
				}
			}
	}

	//ip n'existe pas encore
	return true;
	
}




// BDD PROTECT
function securite_bdd($string)
{
	// On regarde si le type de string est un nombre entier (int)
	if(ctype_digit($string))
	{
		$string = intval($string);
	}
	// Pour tous les autres types
	else
	{
		$string = mysql_real_escape_string($string);
		$string = addcslashes($string, '%_');
	}
	
	return $string;
}

?>