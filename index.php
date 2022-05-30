<?php

$page = '';

if(isset($_GET['page'])) {          
    $page = $_GET['page'];
}
if(isset($_GET['id'])) {
    $id = intval($_GET['id']);
}


switch($page) {
    case 'contact' :
        require './controleur/contact_c.php';
        break;
    
    case 'about':
        require './controleur/about_c.php';
        break;
    
    case 'avis':
        require './controleur/avis_c.php';
        break;
        
    case 'connexion':
        require './controleur/connexion_c.php';
        break; 
    
    case 'panier':
        require './controleur/panier_c.php';
        break;
        
    case 'categories':
        require './controleur/categories_c.php';
        break;
        
    case 'categories2':
        require './controleur/categories_c2.php';
        break;
        
    case 'produit':
        require './controleur/produits_c.php';
        break;
        
    default : 
        require './controleur/home_c.php';
}
