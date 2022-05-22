	<?php
		session_start();
	?>

<?php
		include "entete.html.php";
	?>

	<?php
		include "menu.html.php";
	?>

	<div> 

	<div id="contact-area">
		<h1 id="contact-tiltle">CONTACTEZ-NOUS</h1>
		<form class="contactform" method="post" action="">
			<div id="first-line-contact">
				<div class="champ-input aligned" id="nom">
					<label>Nom :</label><br>
					<input type="text" name="nom">
				</div>
				<div class="champ-input aligned" id="prenom">
					<label>Prénom :</label><br>
					<input type="text" name="prenom">
				</div>
			</div>
			
			<div class="champ-input" id="email">
				<label>Adresse e-mail :</label><br>
				<input type="text" name="email">
			</div>
			<div class="champ-input" id="commentaire">
				<label>Commentaire :</label><br>
				<textarea type="text" name="commentaire"></textarea>
			</div>
			<div id="button-confirm-contact">
				<input class="button-contact" id="center_button" type="submit" name="button_contact" value="Envoyer">
			</div>
		</form>
	</div>

	<?php
		include "pied.html.php";
	?>