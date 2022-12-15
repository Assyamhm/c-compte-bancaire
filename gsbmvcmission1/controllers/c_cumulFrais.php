<?php
include("views/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
    case 'fraisForfait':{
        $leMois = $_REQUEST['lstMois/annee']; 
        $lesMois=$pdo->getLesMoisAnneeDisponibles($idVisiteur);
        $lesMois=$pdo->getLesMoisAnneeDisponibles();
        // Afin de sélectionner par défaut le dernier mois dans la zone de liste
        // on demande toutes les clés, et on prend la première,
        include ("views/v_suiviCumul.php");
        break;
    }
    case 'cumul':{
        $leMois = $_REQUEST['lstMois/annee']; 
        $lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
        $moisASelectionner = $leMois;
        include("views/v_suiviCumul.php");
        $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
        $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur,$leMois);
        
        $numAnnee =substr( $leMois,0,4);
        $numMois =substr( $leMois,4,2);
        $libEtat = $lesInfosFicheFrais['libEtat'];
        $montantValide = $lesInfosFicheFrais['montantValide'];
        $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
        $dateModif =  $lesInfosFicheFrais['dateModif'];
        $dateModif =  dateAnglaisVersFrancais($dateModif);
        include ("views/v_suiviCumul.php");
    }
    
        
}
?>