<?php
	require "./modele/bd.divisions.inc.php";

	$division = getDivisionById($_GET['numero']);

	include "./vue/vueModifier.php";
?>