<?php
	include_once "./modele/bd.divisions.inc.php";
	
	if(isset($_POST['supprimer'])){
		$isPossible = removeDivisionById($_POST['get-id-div']);
	}

	$listeDivisions = getAllDivisions();

	if(isset($_POST['get-id-div-modification'])){
		$laDivision = getDivisionById($_POST['get-id-div-modification']);
	}

	if(isset($_POST['submit-modifier-division'])){
		$isModifier = modifierDivision($_POST['input-modified-division-name'], $_POST['hidden-num-division-modification']);
		header("Refresh:0");
	}

	if(isset($_POST['submit-insertion-division'])){
		$isInsert = ajoutDivision($_POST['new-variable-insertion']);
		header("Refresh:0");
	}
	
	include "./vue/divisions.html.php";
?>