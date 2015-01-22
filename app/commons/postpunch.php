<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	//include ('config.php');
	include('../adm/bddconnect.php');
	
	if(isset($_POST['mc']) && isset($_POST['punch']))
	{	
		extract($_POST);
		$formMc = htmlspecialchars($formMc);
		$formPunch = htmlspecialchars($formPunch);

		if (!empty($formMc) && !empty($formPunch))
		{
			var_dump($formMc);
			var_dump($formPunch);

			$req = $bdd->prepare('INSERT INTO punchline (name, punch, time) VALUES( :mc, :punch, NOW())');
			$req->execute(array(
					'mc' => $formMc,
					'punch' => $formPunch
				));
			echo 'ok';
		
		}else{
			echo 'Une erreur est survenue lors de l\'envoi, remplis le champs ! <a href="#" class="close">&times;</a>';
			}
	} else {
		echo "Error";
	}
?>