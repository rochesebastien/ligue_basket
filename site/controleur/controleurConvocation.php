<?php 
include_once "./modele/bd.divisions.inc.php";
$id = $_GET['numero']; 
$convoc = getMatchById($id);


include ("./modele/createpdf.php");
?>