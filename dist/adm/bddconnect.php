<?php
	$host = 'mysql:dbname=Sheguey;host=localhost;charset:UFT-8';
	$user = 'root';
	$pass = 'root';
	try{
		$bdd = new PDO($host, $user, $pass);
	}catch (PDOException $e){
	        echo 'Erreur : ' . $e->getMessage();
	}
?>