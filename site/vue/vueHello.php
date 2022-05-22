<?php 
include "./vue/entete.html.php";
?>
<h2>Gestion des divisions</h2>
<div  class="form">
<form class="form_content" action="./?action=hello" method="POST">

<div class="container">
    <select id="choix-box" name="nom" value="<?= $_POST["nom"] ?>">
    	<option selected disabled>Choisir une division...</option>
    	<option>Division 1</option>
    	<option>Division 2</option>
    	<option>Division 3</option>
    </select><br>

	<input type="submit"  class="btn" name ="btn" value="Enregistrer">



<?php
if ($message != "") { ?>
	<div class="alert success"> 
	  <?= $message ?>.
	</div>
<?php } ?>

<?php
if ($erreur != "") { ?>
	<div class="alert warning">
	   <?= $erreur ?>
	</div>
<?php } ?>

</div>
</div>
</form>
<?php 
include "./vue/pied.html.php";
?>
