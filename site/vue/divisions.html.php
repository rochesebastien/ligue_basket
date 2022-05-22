	<?php
		session_start();
	?>

	<?php
		include "entete.html.php";
	?>

	<?php
		include "menu.html.php";
	?>

	<div id="division-area">
		<div id="tiltle-border">
			<h1 id="divisions-tiltle">Liste des divisions</h1>
		</div>
		<div id="liste-division">

				<?php
					if(!isset($_POST['get-id-div-modification'])){


				?>
			<fieldset id="fieldset-liste-division">

				<table id="division-table">
					<tr class="division-ligne-first">
						<td class="division-cellule-first division-cellule-id">ID</td>
						<td class="division-cellule-first division-cellule-nom">Nom division</td>
						<?php
							if(isset($_SESSION['username'])){
				if($_SESSION['username'] == "responsable"){
						?>

						<td class="division-cellule-first division-cellule-action">Action</td>
						<?php
					}
}
						?>
					</tr>
					<tr>
						<td colspan='3' bgcolor='black' style='font-size:1pt'>NBSP</td>
					</tr>
					
						<?php 
							foreach ($listeDivisions as $ligne) {
								if(isset($_SESSION['username'])){
									if($_SESSION['username'] == "responsable"){
								echo "<form method=\"post\" action=\"./?action=divisions\">";
								echo "<input type=\"hidden\" name=\"get-id-div-modification\" value=\"$ligne->num_division\">";
							}
						}
								echo "<tr class=\"division-ligne\">";
								echo "<td class=\"division-cellule-id-print\">$ligne->num_division</td>";
								echo "<td class=\"division-cellule-nom-print\">$ligne->nom_division</td>";
								if(isset($_SESSION['username'])){
				if($_SESSION['username'] == "responsable"){
								echo "<td class=\"division-cellule-action-print\"><input type=\"submit\" name=\"modifier\" value=\"Modifier\" id=\"form-modifier\"> </form>
								<form method=\"post\" action=\"./?action=divisions\"><input type=\"submit\" name=\"supprimer\" value=\"Supprimer\" id=\"form-supprimer\"></a></input>";
								echo "<input type=\"hidden\" name=\"get-id-div\" value=\"$ligne->num_division\">";
								echo "</form>";
							}
						}
								echo "</tr>";
								echo "<tr><td><br></td></tr>";
								
								
							}
					
						?>
					
					
				</table>
		
			</fieldset>
			<?php
			if(isset($_SESSION['username'])){
				if($_SESSION['username'] == "responsable"){
			
			?>
			<fieldset id="fieldset-ajout-division">
				<legend>Ajouter une division</legend>
				<form method ="post" action="?action=divisions">
					<input type="text" name="new-variable-insertion" id="input-insertion-division" placeholder="Nom de division...">
					<input type="submit" name="submit-insertion-division" id="submit-insertion-division-id">
				</form>
			</fieldset>
			<?php
		}
				}
			?>

				<?php
				} else{
					?>

					<div id="div-modification-division">
						<form id="form-modification-division" method="post" action="?action=divisions">
							<h4 id="h4-tiltle-modification">Division numéro <?= $_POST['get-id-div-modification'] ?></h4>
							<input id="input-modified-division" type="text" name="input-modified-division-name" placeholder="<?= $laDivision->nom_division ?>">
							<input type="hidden" name="hidden-num-division-modification" value="<?= $_POST['get-id-div-modification'] ?>">
							<img src="images/modifier.png" id="icon-modifier-div">
							<input type="submit" name="submit-modifier-division">
						</form>
					</div>
					<?php
				}
				
			?>
			<?php
				if(isset($_POST['supprimer'])){
					if($isPossible == false){
						echo "<div id=\"alert-suppression-impossible\">";
						echo "<div id=\"alert-suppression-texte\">";
						echo "La suppression n'est pas possible, un championnat est en cours.";
						echo "</div>";
						echo "</div>";
					}
				}
				 ?>
		</div>
	</div>

	<?php
		include "pied.html.php";
	?>