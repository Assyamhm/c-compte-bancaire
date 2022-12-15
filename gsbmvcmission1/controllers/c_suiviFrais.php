<?php
include("views/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){

    case 'voirsuiviFrais':{
        
        $leMois = $_REQUEST['lstMois/Année']; 
        $lesMois=$pdo->getLesMoisAnneeDisponibles();
        //$lesMois=$pdo->getLesMoisAnneeDisponibles($idVisiteur);
        $moisASelectionner = $leMois;
        include ("views/v_suiviFrais.php");
        //le tableau
        $frais=$pdo->getLesInfosSuiviFrais($leMois);
        
        $lesFraisHorsForfait =$pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
        $lesInfosFicheFrais =$pdo->getLesInfosFicheFrais($idVisiteur,$leMois);

        $numAnnee =substr( $leMois,0,4);
        $numMois =substr( $leMois,4,2);
        //$libEtat = $lesInfosFicheFrais['libEtat'];
        $montantValide = $lesInfosFicheFrais['montantValide'];
        $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
        $dateModif =$lesInfosFicheFrais['dateModif'];
        $dateModif =dateAnglaisVersFrancais($dateModif);
        
        include ("views/v_suiviCumul.php");
        break;
    }

    case 'suivi':{
        $lesMois=$pdo->getLesMoisAnneeDisponibles();
        
        include ("views/v_suiviFrais.php");
        break;
  
    }
}