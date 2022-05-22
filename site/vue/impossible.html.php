<?php
	include "entete.html.php";
?>

<?php
	include "menu.html.php";
?>

<fieldset id="form-connexion">
	<legend>Informations de connexion</legend>
<form method="post" action="">
	<div id="identifiant">
		<label>Identifiant</label>
		<input type="text" name="identifiant">
	</div>
	<div id="mot-de-passe">
		<label>Mot de passe</label>
		<input type="password" name="motdepasse">
	</div>
	<input type="submit" name="submit-connexion" value="Se connecter">
</form>
</fieldset>


<?php
	include "pied.html.php";
?>