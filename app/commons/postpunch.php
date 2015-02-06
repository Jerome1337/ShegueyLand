<?php
	// error_reporting(E_ALL);
	// ini_set("display_errors", 1);
	include('../adm/bddconnect.php');
	$data = array();
	if (!empty($_POST['mc']) && !empty($_POST['punch']))
			{



				$mc = securite_bdd($_POST['mc']);
				$punch = securite_bdd($_POST['punch']);
				$req = $bdd->prepare('INSERT INTO punchline (name, punch, time) VALUES( :mc, :punch, NOW())');
				$req->execute(array(
						'mc' => $mc,
						'punch' => $punch
					));
				$data['success'] = true;	
			}else{
				$data['success'] = false;
			}
			echo json_encode($data);