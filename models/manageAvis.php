<?php


require_once 'manage.php';

class ManageAvis extends Manage {
    
    public function getAvisListe() {
        $query =("SELECT nom, prenom, avis FROM avis ");
        return $this->getquery($query);
    }
    
    public function AjoutAvis($nom,$prenom,$avis,$user_id) {
        $data=[
            'nom'=>$nom,
            'prenom'=>$prenom,
            'avis'=>$avis,
            'user_id'=>$user_id
            ];
        $query = "INSERT INTO avis (nom,prenom,avis,user_id) VALUES (:nom :prenom :avis :user_id)";
        $this->getquery($query,$data);
}
};
