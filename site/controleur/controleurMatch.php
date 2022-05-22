<?php
	include_once "./modele/bd.divisions.inc.php";
	$listeMatch = getAllMatch();
	include "./vue/match.html.php";
?>