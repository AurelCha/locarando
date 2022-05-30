<?php 
ob_start();

$title='';
?>
    <div class="article_c">
            <p>S'équiper est primordial si vous souhaiter profiter </p>
            <p> sereinement de vos escapades en pleine nature</p>
            <p> C'est le moment de faire votre liste !</p>
        </div>
<?php    
    echo'  <div class="categories_produit">';
    while($r = $liste->fetch(PDO::FETCH_ASSOC)) {
        echo'
         <a href="index.php?page=categories2&id='.$r['id'].'">
                <img src="./public/images/categories/'.$r['photo_categorie'].'" alt="">
         <p>'.$r['nom'].'</p>
        </a>';   
   }
  
    echo'</div>';
  

$content=ob_get_clean(); 
require 'template.php';
?>