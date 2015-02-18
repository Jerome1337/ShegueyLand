<!doctype html>
<html lang="fr-FR" manifest="cache/localSoundStorage.appcache">
	<head>
		<?php
		$onglet_actif = "punch";
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
								<textarea name="punch" id="formPunchline" maxlength="150" placeholder="Écris ta punchline"></textarea>
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
				$ip_client = $_SERVER["REMOTE_ADDR"];
				
					$reponse = $bdd->query('SELECT * FROM punchline WHERE id order by time DESC LIMIT 30');
					while ($punchline = $reponse->fetch())
				{
				$mc = $punchline['name'];
				$punch = $punchline['punch'];
				$numwords = 15;
				$sentence = preg_replace('/["&*$%>]/i', '', $punch);
				$words = explode(" ", $sentence);
				$newsetence = implode(" ", array_slice($words, 0, $numwords))."...";
				?>
				<div class="punch">
					<div>
						<p class="punchline"><?php echo $punch; ?></p>
						<h2 class="mc">Posté par <?php echo $mc; ?></h2>
					</div>
					<div class="tweetPunch">
                    	<a data-url="https://twitter.com/intent/tweet?text=%22<?php echo $newsetence ?>%22%20%23<?php echo $mc ?>%20%23ShegueyLand&amp;related=Shegueyland,gradidur,theHauteCulture" class="twitter"><div class="twitterIcon socialIcon"></div></a>
                	</div>
				</div>
					<?php
					}
					?>
			</div>
		</div>
		<?php include('commons/footer.php'); ?>
		<?php include('commons/script_bottom.php'); ?>
		<script>
			$(document).ready(function() {

			ip_client = '<?php echo"$ip_client"; ?>';
			// console.log("HEEEY : " + ip_client);

			});
		</script>
	</body>
</html>