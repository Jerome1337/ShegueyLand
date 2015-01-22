<?php
	// error_reporting(E_ALL);
	// ini_set("display_errors", 1);
	//include ('config.php');
	include('../adm/bddconnect.php');
	echo $_POST['name'];
	
	if(isset($_POST['name'])  && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
	{
		extract($_POST);
		$formName = htmlspecialchars($_POST['name']);
		$formEmail = htmlspecialchars($_POST['email']);
		$formSubject = htmlspecialchars($_POST['subject']);
		$formMessage = htmlspecialchars($_POST['message']);

		if (!empty($formName) && !empty($formEmail) && !empty($formSubject) && !empty($formMessage))
		{
<<<<<<< HEAD
			var_dump($formName);
			var_dump($formEmail);
			var_dump($formSubject);
			var_dump($formMessage);
=======
			// var_dump($formName);
			// var_dump($formEmail);
			// var_dump($formSubject);
			// var_dump($formMessage);
>>>>>>> 50df145ed3351d768935e57ee6426f66f8ac179a
			// $destinataire = "p-jerome@hotmail.com";
			// $sujet = "Demande de contact";
			// $message = "Nom : ".$_POST['name']."\n";
			// $message = "Adresse email : ".$_POST['email']."\n";
			// $message = "Message : ".$_POST['message']."\n";
			// $entete = 'From: '.$_POST['email']."\n".
<<<<<<< HEAD
   			// 'Reply-To: '.$_POST['email']."\n".
=======
   //      		'Reply-To: '.$_POST['email']."\n".
>>>>>>> 50df145ed3351d768935e57ee6426f66f8ac179a
			// 'X-Mailer: PHP/'.phpversion();
			// if (mail($destinataire,$sujet,$message,$entete)){
			// 		// echo 'Message envoyé';
			// } else {
<<<<<<< HEAD
 			// // echo "Une erreur est survenue lors de l'envoi du formulaire par email";
=======
 		// 			// echo "Une erreur est survenue lors de l'envoi du formulaire par email";
>>>>>>> 50df145ed3351d768935e57ee6426f66f8ac179a
			// }

			$to = 'contact@sheguey.land';
			$content = ''.$_POST['message'].'';
			$subject = 'Nouveau message de '.$_POST['email'].' - Sheguey Land';
			$from = ''.$_POST['email'].'';

			$uri = 'https://mandrillapp.com/api/1.0/messages/send.json';
			$api_key = 'JNAv6HAIRIAYH93NHdlvcQ';
			$content_text = strip_tags($content);

			$postString = '{
				"key": "' . $api_key . '",
				"message": {
				"html": "' . $content . '",
				"text": "' . $content_text . '",
				"subject": "' . $subject . '",
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

			$req = $bdd->prepare('INSERT INTO contactForm (name, email, subject, message) VALUES( :name,  :email,  :subject,  :message)');
			$req->execute(array(
					'name' => $formName,
					'email' => $formEmail,
					'subject' => $formSubject,
					'message' => $formMessage
				));
			echo 'ok';
		
		}else{
			echo 'Une erreur est survenue lors de l\'envoi, remplissez tous les champs ! <a href="#" class="close">&times;</a>';
			}
	} else {
		echo "Error";
	}
?>