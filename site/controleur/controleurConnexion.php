<?php
	include_once "./modele/bd_connexion.php";
	session_start();

	if(!isset($_SESSION["username"])){
		$isLogin = false;
	
	
		if(isset($_POST['identifiant'])){
			$cnx = connexionPDO();
			$req = $cnx->prepare("SELECT * FROM user WHERE identifiant = ?");
			$req->bindValue(1,$_POST['identifiant']);
			$req->execute();
			$resultat = $req->fetch(PDO::FETCH_OBJ);
			if(!empty($resultat)){
		if(password_verify($_POST['motdepasse'], $resultat->password)){
			$_SESSION["username"] = $_POST['identifiant'];
			$isLogin = true;
		}
	}
	}
} else{
	$isLogin = true;
}

	include "vue/impossible.html.php";
?>