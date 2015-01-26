<?php

	function saveImageOrVid($contenu){
		include('../adm/bddconnect.php');

			
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
		include('../adm/bddconnect.php');

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
				$buug = "buuuug";
				echo"buug";
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

		    		     // pseudo libre
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
				getMoreSheguey("$getMoreSheguey");
			}
			
				


			function getMoreSheguey($last_img){
			include('../adm/bddconnect.php');

				$reponse = $bdd->query('SELECT * FROM instagram WHERE type = \'image\' AND id < '.$last_img.' order by id DESC LIMIT 8');
				while ($donnees = $reponse->fetch())
				{
                    $id = $donnees['id'];
                    $standard_resolution = $donnees['standard_resolution'];
                    $low_resolution = $donnees['low_resolution'];
                    $media_caption = $donnees['caption_text'];
                    $tags = $donnees['tags'];
                    $tag = explode(",", $tags);
                    // echo json_encode(array('content' => 'error','message'=> 'The group has not been removed'));
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
			}
?>