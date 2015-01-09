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
			$message=str_replace("\'","'", $message);
			$destinataire="contact@sheguey.land";
			$sujet="Nouveau message de $formName - Sheguey Land";
			$mail="
				Nom: $formName \n 
				Email: $formEmail \n 
				Message: $formMessage";
			$entete="From: $formName \n Reply-To: $formEmail";
			mail($destinataire, $sujet, $mail, $entete);

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
	}
?>