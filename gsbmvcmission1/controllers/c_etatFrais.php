﻿<?php
include("views/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
    case 'selectionnerMois':{
        $lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
        // Afin de sélectionner par défaut le dernier mois dans la zone de liste
        // on demande toutes les clés, et on prend la première,
        // les mois étant triés décroissants
        $lesCles = array_keys( $lesMois );
        $moisASelectionner = $lesCles[0];
        include("views/v_listeMois.php");
        break;
    }
    case 'voirEtatFrais':{
        $leMois = $_REQUEST['lstMois']; 
        $lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
        $moisASelectionner = $leMois;
        include("views/v_listeMois.php");
        $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
        $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur,$leMois);
        $numAnnee =substr( $leMois,0,4);
        $numMois =substr( $leMois,4,2);
        $libEtat = $lesInfosFicheFrais['libEtat'];
        $montantValide = $lesInfosFicheFrais['montantValide'];
        $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
        $nb=$pdo->getnb($idVisiteur,$leMois);
        $nb=$nb[0];
        var_dump($nb[0]);
        $dateModif =  $lesInfosFicheFrais['dateModif'];
        $dateModif =  dateAnglaisVersFrancais($dateModif);
        include ("views/v_etatFrais.php");
    }
    
        
}
?>