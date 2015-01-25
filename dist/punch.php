<!doctype html>
<html lang="fr-FR" manifest="cache/localSoundStorage.appcache">
	<head>
		<?php
		$onglet_actif = "noise";
		include('commons/head.php'); ?>
		<title>SHEGUEYLAND - Punchlines</title>
	</head>
	<body>
		<?php include('commons/header.php'); ?>
		<div class="content">
			<section class="addPunch">
				<div class="contentform">
					<form action="#" method="post" id="formPunch">
						<input type="text" placeholder="Pseudo" name="mc" id="formMc">
						<textarea type="text" name="punch" id="formPunchline" row="8" col="30" maxlenght="150" placeholder="Écris ta punchline (150 caractères maximum)"></textarea>
						<button type="submit" class="button" id="submitPunch">Ajouter</button>
					</form>
					<div id="punchAdded">
						<h2></h2>
						<p></p>	
					</div>
				</div>
			</section>
			<div class="row">
				<?php
					$reponse = $bdd->query('SELECT * FROM punchline WHERE id order by time DESC LIMIT 30');
					while ($punchline = $reponse->fetch())
				{
				$mc = $punchline['name'];
				$punch = $punchline['punch'];
				$time = $punchline['time'];

				$randomColor = array();
				$randomColor[] = "red";
				$randomColor[] = "black";
				$randomColor[] = "black";
				$randomColor[] = "lightgrey greytext";
				$randomColor[] = "red";
				$randomColor[] = "lightgrey greytext";
				$randomColor[] = "black";
				$randomColor[] = "lightgrey greytext";
				$randomColor[] = "red";
				?>
				<div class="rect punch <?php echo $randomColor[rand(0,count($randomColor)-1)]?>">
					<div>
						<h2 class="mc"><?php echo $mc; ?></h2>
						<p class="punchline"><?php echo $punch; ?></p>
						<p class="punchDate"><?php echo $time; ?></p>
					</div>
				</div>
					<?php
					}
					?>
			</div>
		</div>
		<?php include('commons/footer.php'); ?>
		<?php include('commons/script_bottom.php'); ?>
	</body>
</html>