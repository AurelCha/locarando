<?php

require_once 'manage.php';

class ManageCategories extends Manage {
    
    public function getCategoriesListe() {
        $query =("SELECT * FROM categories_produit");
        return $this->getquery($query);
    }
    
    public function getCategorieInfos() {
        $query=("SELECT sous_categorie.categories_produit_id, sous_categorie.nom, sous_categorie.photo, categories_produit.id
               FROM sous_categorie JOIN categories_produit ON categories_produit.id = sous_categorie.categories_produit_id");
        return $this->getquery($query);
    }
}
