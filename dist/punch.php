<!doctype html>
<html lang="fr-FR" manifest="cache/localSoundStorage.appcache">
	<head>
		<?php
		$onglet_actif = "noise";
		include('commons/head.php'); ?>
		<title>SHEGUEYLAND - Click & Sheg</title>
	</head>
	<body>
		<?php include('commons/header.php'); ?>
		<div class="content">
			<div class="row">
				<section>
					<form action="#" method="post" id="formPunch">
						<input type="text" placeholder="Pseudo" name="mc" id="formMc">
						<textarea type="text" name="punch" id="addPunch" cols="30" rows="10" placeholder="Écris ta punchline"></textarea>
						<button type="submit" id="submitPunch">Poster</button>
					</form>
					<div id="punchAdded"></div>
				</section>
			</div>
		</div>
		<?php include('commons/footer.php'); ?>
		<?php include('commons/script_bottom.php'); ?>
	</body>
</html>