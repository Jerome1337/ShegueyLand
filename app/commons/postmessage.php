<?php
	// error_reporting(E_ALL);
	// ini_set("display_errors", 1);
	include('../adm/bddconnect.php');
		$data = array();
		if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']))
		{
			// var_dump($_POST['name']);
			// var_dump($_POST['email']);
			// var_dump($_POST['subject']);
			// var_dump($_POST['message']);

			$to = 'contact@sheguey.land';
			$content = ''.$_POST['message'].'';
			$subject = 'Nouveau message de '.$_POST['name'].' - Sheguey Land';
			$from = ''.$_POST['email'].'';

			$uri = 'https://mandrillapp.com/api/1.0/messages/send.json';
			$api_key = 'JNAv6HAIRIAYH93NHdlvcQ';
			$content_text = strip_tags($content);

			$postString = '{
				"key": "' . $api_key . '",
				"message": {
				"html": "' . $content . '",
				"text": "' . $content_text . '",
				"from_email": "' . $from . '",
				"from_name": "' . $from . '",
				"to": [
				{
					"email": "' . $to . '",
					"name": "' . $to . '"
				}
				],
				"track_opens": true,
				"track_clicks": true,
				"auto_text": true,
				"url_strip_qs": true,
				"preserve_recipients": true
				},
				"async": false
			}';

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $uri);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
			$result = curl_exec($ch);

			

			$req = $bdd->prepare('INSERT INTO contactform (name, email, message) VALUES( :name,  :email, :message)');
			$req->execute(array(
					'name' => $_POST['name'],
					'email' => $_POST['email'],
					'message' => $_POST['message']
				));
			$data['success'] = true;
			
		}else{
			$data['success'] = false;
		}
		echo json_encode($data);