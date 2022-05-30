<?php

require './models/manageCategories.php';

$categorie2 = new ManageCategories();
$infos = $categorie2->getCategorieInfos();



require './view/categories_v2.php' ;

