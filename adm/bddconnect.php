<?php
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=Sheguey', 'root', 'root');
	}
	catch (Exception $e){
	        die('Erreur : ' . $e->getMessage());
	}
?>