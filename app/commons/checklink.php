<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include('../adm/bddconnect.php');
	$search = $bdd->query('SELECT id, link FROM instagram');
	while ($value = $search->fetch())
	{
		$id = $value['id'];
		$link = $value['link'];
		echo $id . ' ' . $link . '<br>';
		$file_header = @get_headers($link);
		if($file_header[0] == 'HTTP/1.1 404 NOT FOUND'){
			$exists = false;
			echo "JE SUIS PAS LA ";
			$sql = 'DELETE FROM instagram WHERE id='.$id.'';
			exec($sql);
			// var_dump($delete);
		}else{
			$exists = true;
			echo "JE SUIS LA ";
		}
		// var_dump($file_header);
	}
	