<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	//include ('config.php');
	include('../adm/bddconnect.php');

	if(isset($_POST) && isset($_POST['formName']) && isset($_POST['formEmail']) && isset($_POST['formSubject']) && isset($_POST['formMessage']))
	{
		extract($_POST);
		$formName = htmlspecialchars($formName);
		$formEmail = htmlspecialchars($formEmail);
		$formSubject = htmlspecialchars($formSubject);
		$formMessage = htmlspecialchars($formMessage);

		if (!empty($formName) && !empty($formEmail) && !empty($formSubject) && !empty($formMessage)){
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

			$req = $bdd->prepare('INSERT INTO contactForm (name, email, subject, message) VALUES (:formName, :formEmail, :formSubject, :formMessage)');
			$req->execute(array(
					'formName' => $name,
					'formEmail' => $email,
					'formSubject' => $subject,
					'formMessage' => $message
				));
			echo 'ok';
		
		}else{
			echo 'Une erreur est survenue lors de l\'envoi, remplissez tous les champs ! <a href="#" class="close">&times;</a>';
			}
	}

?>