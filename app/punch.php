<!doctype html>
<html lang="fr-FR" manifest="cache/localSoundStorage.appcache">
	<head>
		<?php
		$onglet_actif = "noise";
		$activeMenuPunch = "class=\"activeMenu\"";
		include('commons/head.php'); ?>
		<title>SHEGUEYLAND - Punchlines</title>
	</head>
	<body>
		<?php include('commons/header.php'); ?>
		<header class="header">
            <h2>Les punchlines de Sheguey</h2>
        </header>
		<div class="content">
		<h3 class="title3">Toi aussi, ajoute ta puchline de Sheguey.</h3>
			<section class="addPunch">
				<div class="contentform">
					<form action="#" method="post" id="formPunch">
						<fieldset>
	                    	<legend>Formulaire de punchline de Sheguey</legend>
	                    	<p></p>
	                    	<div>
								<textarea name="punch" id="formPunchline" maxlength="150" placeholder="Écris ta punchline (150 caractères maximum)"></textarea>
								<input type="text" placeholder="Pseudo" name="mc" id="formMc">
								<button type="submit" class="button" id="submitPunch">Ajouter</button>
							</div>
						</fieldset>
					</form>
				</div>
			</section>
			<div id="punchAdded">
				<h2></h2>	
			</div>
			<div class="row" id="contentPunchline">
				<div class="newPunch punch"></div>
				<?php
					$reponse = $bdd->query('SELECT * FROM punchline WHERE id order by time DESC LIMIT 30');
					while ($punchline = $reponse->fetch())
				{
				$mc = $punchline['name'];
				$punch = $punchline['punch'];
				$time = $punchline['time'];
				?>
				<div class="punch">
					<div>
						<p class="punchline"><?php echo $punch; ?></p>
						<h2 class="mc"><?php echo $mc; ?></h2>
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