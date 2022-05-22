<?php
	include "entete.html.php";
?>
<div id="div-tiltle-modifier-division">
	<h1 id="tiltle-modifier-division">Modifier la division n° <?php echo "$division->num_division" ?></h1>
</div>

<div class="div-input-division">
	<p class="label-modifier label-modifier-top">Numéro de division : </p>
	<input type="text" name="num-division">
</div>

<div class="div-input-division">
	<p class="label-modifier">Nom de division : </p>
	<input type="text" name="nom-division">
</div>

<?php
	include "pied.html.php";
?>