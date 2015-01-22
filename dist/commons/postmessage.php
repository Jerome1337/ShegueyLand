<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	//include ('config.php');
	include('../adm/bddconnect.php');
	
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
	{
		extract($_POST);
		$formName = htmlspecialchars($_POST['name']);
		$formEmail = htmlspecialchars($_POST['email']);
		$formSubject = htmlspecialchars($_POST['subject']);
		$formMessage = htmlspecialchars($_POST['message']);

		if (!empty($formName) && !empty($formEmail) && !empty($formSubject) && !empty($formMessage))
		{
			// var_dump($formName);
			// var_dump($formEmail);
			// var_dump($formSubject);
			// var_dump($formMessage);
			$destinataire = "p-jerome@hotmail.com";
			$sujet = "Demande de contact";
			$message = "Nom : ".$_POST['name']."\n";
			$message = "Adresse email : ".$_POST['email']."\n";
			$message = "Message : ".$_POST['message']."\n";
			$entete = 'From: '.$_POST['email']."\n".
        		'Reply-To: '.$_POST['email']."\n".
			'X-Mailer: PHP/'.phpversion();
			if (mail($destinataire,$sujet,$message,$entete)){
					// echo 'Message envoyé';
			} else {
 					// echo "Une erreur est survenue lors de l'envoi du formulaire par email";
			}

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