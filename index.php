<!DOCTYPE html>
<html>
	<head>
		<title>JS</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<!--<script type="text/javascript" src="scriptFred.js"></script>-->
	</head>
	<body>
		<!-- C'est pas très correct de regarer les commentaires des gens Fred attention ! -->
		<h1>if(Javacript === JAVA) {</h1>
		<h2>echo "Ben quoi ? Javascript c'est pareil que JAVA non ?";</h2>
		<h1>}</h1>

		<hr>

		<h1 class="tuning">Simulateur d'emprunt (Ex1)</h1>
		
		<div class="flex">
		
			<form id="form">
				<label>
					<p>Montant souhaité (euros) :</p> <input type="number" name="montant" value="1000" min="500" max="1000000">
				</label>
				<label>
					<p>Durée souhaité (année) :</p> <input type="number" name="duree" value="1" min="1" max="25">
				</label>
				<label>
					<p>Taux souhaité (pourcent) :</p> <input type="number" name="taux" value="1.2" step="0.1" min="1.0" max="25.0">
				</label>
				<input type="submit" id="submit" value="Envoyer">
			</form>

			<h2 id="resultat"></h2>

		</div>

		<hr>

		<h1 class="tuning">AJAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX !</h1>

		<div class="flex">
		
			<form id="formAjax" action="ajax.php" method="post">
				<label>
					<p>Nom :</p> <input type="text" name="nom" value="Noel">
				</label>
				<label>
					<p>Prenom :</p> <input type="text" name="prenom" value="Fred">
				</label>
				<label>
					<p>Adresse Mail :</p> <input type="mail" name="mail" value="cestnoel@decembre.fric">
				</label>
				<label>
					<p>Mot de passe :</p> <input type="password" name="mdp" value="tacruquecetaitunvraimotdepasse">
				</label>
				<input type="submit" id="submitAjax" value="Envoyer">
			</form>

			<h2 id="resultat"></h2>

		</div>

		<hr>

		<a href="https://www.alexisprevostmaynen.fr">Go to my Website !</a>
		<img src="me.png">
	</body>
</html>
<script type="text/javascript" src="script.js"></script>