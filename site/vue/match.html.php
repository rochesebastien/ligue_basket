	<?php
		session_start();
	?>

<?php
		include "entete.html.php";
	?>

	<?php
		include "menu.html.php";
	?>


<div id="match_area">	

	<div id="title_div_match">
		<p id="title_match">Match du championnat</p>
	</div>
		
		<fieldset id="match_div_table">
			<table id="match_table">
				<form method="post" action="./?action=match">
								<tr class="table_top_match">
									<td class="cellule_match">N° Match</td>
									<td class="cellule_match">Date Match</td>
									<td class="cellule_match">Equipe 1</td>
									<td class="cellule_match">Equipe 2</td>
									<td class="cellule_match">N° Arbitre Principal</td>
									<td class="cellule_match">Convocation</td>

								</tr>
								<tr>
								<td colspan='6' bgcolor='black' style='font-size:1pt'>NBSP</td>
								</tr>
					<?php 
					foreach ($listeMatch as $ligne) {
					?>
								<tr class="match_row">
									<td class="cellule_match"><?= "$ligne->num_match"?> </td>

									<td class="cellule_match"><?= "$ligne->date_match"?> </td>

									<td class="cellule_match"><?= "$ligne->nom_equipe_1"?> </td>

									<td class="cellule_match"><?= "$ligne->nom_equipe_2"?> </td>

									<td class="cellule_match"><?= "$ligne->num_arbitre_principal"?> </td>
									<td class="cellule_match"><a href="./?action=convocation&numero=<?= "$ligne->num_match"?>" download> <img class="logo_convoc" src="images/pdf.png"></img></a></
									<td>
								</tr>
								<td colspan='6' bgcolor='black' style='font-size:1pt'>NBSP</td>
								</tr>

					<?php }
	?>
	</form>	
	</table>
	</fieldset>	 
					
		</div>


</div>
	<?php
		include "pied.html.php";
	?>