<?php


/*debut du cache*/

 




	function getInsta($type, $tag, $limit){
		$cache = '../cache/index.html';
		$expire = time() -3600 ; // valable une heure
		$client_id = "132efb02e32f4d80bb641c00c8f9c118";
		$user_id = "1341194982";
		$endpoint = "https://api.instagram.com/v1/tags/$tag/media/recent/?client_id=$client_id&count=$limit";

		if(file_exists($cache) && filemtime($cache) > $expire)
		{
		        readfile($cache);
		}
		else
		{
	        ob_start(); // ouverture du tampon
	        
	        try {
			    $curl = curl_init($endpoint);
			    curl_setopt($curl, CURLOPT_TIMEOUT, 3);
			    curl_setopt($curl, CURLOPT_RETURNTRANSFER , true);
			    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER  , false);
			    
			    $data = json_decode(curl_exec($curl));
			
			} catch (Exception $e) {
			    die($e->getMessage());
			}

			if($data->meta->code == 200){
			    foreach ($data->data as $contenu) {
			        if ($contenu->type == 'image') {
			            echo"<img src='{$contenu->images->standard_resolution->url}' width='320'>";
			            
			            // var_dump($contenu);
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
	        
	        file_put_contents($cache, $page) ; // on écrit la chaîne précédemment récupérée ($page) dans un fichier ($cache) 
	        echo $page ; // on affiche notre page :D 
		}


		
	}
?>