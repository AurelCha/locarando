<?php

require './models/manageAvis.php';

$avis = new ManageAvis();


if (isset( $_POST['submit'])) {
    if(isset($_POST['nom'])) {
        $nom = htmlspecialchars($_POST['nom']);
        } else {
            $nom = '';
    }
        
    if(isset($_POST['prenom'])) {
        $prenom = htmlspecialchars($_POST['prenom']);
        } else {
            $prenom = '';
    }
        
    if(isset($_POST['avis'])) {
        $avis = htmlspecialchars($_POST['avis']);
        } else {
            $avis = '';
    }

    $avis->AjoutAvis($nom,$prenom,$avis);

}
$liste_avis = $avis->getAvisListe();   



require './view/avis_v.php' ;