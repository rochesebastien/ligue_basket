<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "controleurAccueil.php";
    $lesActions["accueil"] = "controleurAccueil.php";
    $lesActions["divisions"] = "controleurDivisions.php";
    $lesActions["match"] = "controleurMatch.php";
    $lesActions["contact"] = "controleurContact.php";
    $lesActions["modifier"] = "controleurModifier.php";
    $lesActions["convocation"] = "controleurConvocation.php";
    $lesActions["connexion"] = "controleurConnexion.php";
    
    


    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}
?>