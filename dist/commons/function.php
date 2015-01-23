<?php

	function saveImageOrVid($contenu){
		include('adm/bddconnect.php');

		if ($contenu->type == 'image') {
			
			// Saving image format

			$req = $bdd->prepare('	INSERT INTO instagram(id_insta, standard_resolution, low_resolution, caption_text, username, type, link) 
									VALUES(:id_insta, :standard_resolution, :low_resolution, :caption_text, :username, :type, :link)');
			$req->execute(array(
				'id_insta' => $contenu->id,
				'standard_resolution' => $contenu->images->standard_resolution->url,
				'low_resolution' => $contenu->images->low_resolution->url,
				'caption_text' => $contenu->caption->text,
				'username' => $contenu->user->username,
				'type' => $contenu->type,
				'link' => $contenu->link
				));

		    echo"<img src='{$contenu->images->standard_resolution->url}' width='80'>";
		} elseif($contenu->type == 'video') {

			// Saving image format

			$req = $bdd->prepare('	INSERT INTO instagram(id_insta, standard_resolution, low_resolution,  caption_text, username, type, link) 
									VALUES(:id_insta, :standard_resolution, :low_resolution, :caption_text, :username, :type, :link)');
			$req->execute(array(
				'id_insta' => $contenu->id,
				'standard_resolution' => $contenu->videos->standard_resolution->url,
				'low_resolution' => $contenu->videos->low_resolution->url,
				'caption_text' => $contenu->caption->text,
				'username' => $contenu->user->username,
				'type' => $contenu->type,
				'link' => $contenu->link
				));

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
?>