<?php
	include_once "bd_connexion.php";

	function getAllDivisions(){
		$resultat = array();
		try {
			$cnx = connexionPDO();
			$req = $cnx->prepare("select * from division");
			$req->execute();
			$resultat = $req->fetchAll(PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			print "Erreur !: " . $e->getMessage();
        die();
		}
		return $resultat;
	}

	function getAllMatch(){
		$resultat = array();
		try {
	
		$conn = connexionPDO();
		$req = $conn->prepare("SELECT num_match, date_match, principal.nom_arbitre as nom_arbitre_principal, secondaire.nom_arbitre as nom_arbitre_secondaire, equipe1.nom_equipe as nom_equipe_1, equipe2.nom_equipe as nom_equipe_2, match.num_arbitre_p as num_arbitre_principal FROM `match` INNER JOIN arbitre principal ON principal.num_arbitre = match.num_arbitre_p INNER JOIN arbitre secondaire ON secondaire.num_arbitre = match.num_arbitre_s INNER JOIN equipe equipe1 ON equipe1.num_equipe = match.num_equipe_1 INNER JOIN equipe equipe2 ON equipe2.num_equipe = match.num_equipe_2");
	
		$req->execute();
	
		$resultat = $req->fetchAll(PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			print "Erreur !: " . $e->getMessage();
        die();
		}
		return $resultat;
	}

	function getMatchById($id){
		try{
	 	$cnx = connexionPDO();
		$req1 = $cnx->prepare("SELECT num_match, date_match, championnat.num_championnat as numero_champio, nom_championnat, principal.nom_arbitre as nom_arbitre_principal, secondaire.nom_arbitre as nom_arbitre_secondaire, equipe1.nom_equipe as nom_equipe_1, equipe2.nom_equipe as nom_equipe_2,
		montant_deplt_p, principal.prenom_arbitre as prenom_arbitre_principal, secondaire.prenom_arbitre as prenom_arbitre_secondaire, num_arbitre_s, num_arbitre_p FROM `match` INNER JOIN arbitre principal ON principal.num_arbitre = match.num_arbitre_p INNER JOIN arbitre secondaire ON secondaire.num_arbitre = match.num_arbitre_s INNER JOIN equipe equipe1 ON equipe1.num_equipe = match.num_equipe_1 INNER JOIN equipe equipe2 ON equipe2.num_equipe = match.num_equipe_2 INNER JOIN championnat ON equipe2.num_championnat = championnat.num_championnat WHERE match.num_match = ?");

	 	$req1 -> bindValue(1,$id);
			$req1->execute();
			$resultat = $req1->fetchAll(PDO::FETCH_OBJ);
		} catch (PDOException $e) {
			print "Erreur !: " . $e->getMessage();
        	die();
		}
		return $resultat;
}

	function removeDivisionById($id){
		try {
			$resultat = array();
			$cnx = connexionPDO();
			$reqChamp = $cnx->prepare("SELECT * FROM championnat WHERE num_division = ?");
			$reqChamp->bindValue(1, $id);
			$reqChamp->execute();
			$resultat = $reqChamp->fetchAll(PDO::FETCH_OBJ);
			if(empty($resultat)){
				$isPossible = true;
				$req = $cnx->prepare("DELETE FROM division WHERE num_division = ?");
				$req->bindValue(1, $id);
				$req->execute();
			} else{
				$isPossible = false;
			}
			
		} catch (PDOException $e){
			$isPossible = false;
			print "Erreur :; ".$e->getMessage();
			die();
		}
		return $isPossible;
	}

	function getDivisionById($id){
		try{
			$cnx = connexionPDO();
			$req = $cnx->prepare("SELECT * FROM division WHERE num_division = ?");
			$req->bindValue(1,$id);
			$req->execute();
			$resultat = $req->fetch(PDO::FETCH_OBJ);
		} catch (PDOException $e){
			print "Erreur :; ".$e->getMessage();
			die();
		}
		return $resultat;
	}
	function modifierDivision($newNom, $id){
		try{
			$cnx = connexionPDO();
			$req = $cnx->prepare("UPDATE division SET nom_division = ? WHERE division.num_division = ?");
			$req->bindValue(1, $newNom);
			$req->bindValue(2, $id);
			$req->execute();
			return true;
		} catch (PDOException $e){
			print "Erreur : ".$e->getMessage();
			return false;
			die();
		}
	}

	function ajoutDivision($nom){
		try{
			$cnx = connexionPDO();
			$req = $cnx->prepare("INSERT INTO division VALUES(NULL, ?)");
			$req->bindValue(1, $nom);
			$req->execute();
			return true;
		} catch (PDOException $e){
			print "Erreur : ".$e->getMessage();
			return false;
			die();
		}
	}


?>