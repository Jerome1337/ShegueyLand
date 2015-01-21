<?php

	

/*debut du cache*/

 
	function getInsta($type, $tag, $limit){
		$cache = 'cache/index.json';
		$expire = time() -10 ; // 3600 valable une heure
		$client_id = "132efb02e32f4d80bb641c00c8f9c118";
		$user_id = "1341194982";
		$endpoint = "https://api.instagram.com/v1/tags/$tag/media/recent/?client_id=$client_id&count=$limit";

		if(file_exists($cache) && filemtime($cache) > $expire)
		{

			echo("lecture cache \n");

		        // var_dump(json_decode($cache,true));
		            $images = json_decode(file_get_contents($cache),true); //Decode as an json array
		            echo ($images);
		            var_dump($images);
		}
		else
		{
			echo("ouverture du tamp");
	        ob_start(); // ouverture du tampon

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
				return $buug;
			}
			if($data->meta->code == 200){

				echo("enregistrement BDD\n");
			    foreach ($data->data as $contenu) {
		    		
		    		include('adm/bddconnect.php');

		    		$id_insta_actuel = $contenu->id;

		    		//Tester si l'image a deja ete enregistrée...
		    		// $req = $bdd->query('SELECT COUNT(*) FROM instagram WHERE id_insta = $id_insta');
		    		// // $req->execute(array($_GET['id_insta']));
		    		// $nb_enregistrements = $req->fetch();
		    		// echo($nb_enregistrements + " + " + $id_exist );

		    		// $req = $bdd->prepare('	INSERT INTO instagram(id_insta, standard_resolution, low_resolution, caption_text, username, type, link) 
		    		// 						VALUES(:id_insta, :standard_resolution, :low_resolution, :caption_text, :username, :type, :link)');
		    		// $req->execute(array(
		    		// 	'id_insta' => $id_insta_actuel,
		    		// 	'standard_resolution' => $contenu->images->standard_resolution->url,
		    		// 	'low_resolution' => $contenu->images->low_resolution->url,
		    		// 	'caption_text' => $contenu->caption->text,
		    		// 	'username' => $contenu->user->username,
		    		// 	'type' => $contenu->type,
		    		// 	'link' => $contenu->link
		    		// 	));




			        if ($contenu->type == 'image') {
			            echo"<img src='{$contenu->images->standard_resolution->url}' width='150'>";
			            // echo"{$contenu}";
			            // var_dump($contenu->tags);
			            // var_dump($contenu->images);
			            // var_dump($contenu->id);
			        } else {
			            echo"<video width='320' height='320' controls>
			                  <source src='{$contenu->videos->standard_resolution->url}' type='video/mp4'>
			                  Your browser does not support the video tag.
			                </video>";
			             // var_dump($contenu);
			        }
			    }
			    

			} else {
			    echo "impossible de recupérer les images...";
			    
			}
	        
	        $page = ob_get_contents(); // copie du contenu du tampon dans une chaîne
	        ob_end_clean(); // effacement du contenu du tampon et arrêt de son fonctionnement
	        
	        file_put_contents($cache, $oldata) ; // on écrit la chaîne précédemment récupérée ($page) dans un fichier ($cache) 
	        echo $page ; // on affiche notre page :D 
		}


		
	}
?>