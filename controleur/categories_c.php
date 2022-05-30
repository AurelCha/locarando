<?php

require './models/manageCategories.php';

$categorie = new ManageCategories();
$liste = $categorie->getCategoriesListe();

require './view/categories_v.php' ;