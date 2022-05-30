<?php 
ob_start();

$title='';
?>
    <div class="article_c">
            <p>S'équiper est primordial si vous souhaiter profiter </p>
            <p> sereinement de vos escapades en pleine nature</p>
            <p> C'est le moment de faire votre liste !</p>
    </div>
     
    <div class="categories">
        <button type="button" id="equip">Equipement</button>
     </div>   

<?php 
    echo' <div class="cat_prod">';
      while($r = $infos->fetch(PDO::FETCH_ASSOC)) {
        echo' 
            <a href="index.php?page=produit&id='.$r['id'].'">
                <img src="./public/images/categories/equipement/'.$r['photo'].'" alt="">
         <p>'.$r['nom'].'</p>
        </a>';   
   }
  
    echo'</div>';
   
       
  
  
  
  
  
$content=ob_get_clean(); 
require 'template.php';
?>