<?php
$title = '';

ob_start();

?>

   <div class="produit">
        <div class="produit_image">
             <div> <img src="public/images/equipement/batons_randonnee_homme.jpg" alt="" class="image"></div>
             <div> <img src="public/images/equipement/batons_randonnee_homme.jpg" alt="" class=""></div>
        </div>
   </div>
   <div class="produit_infos">
        <h3><?=$title?> Titre produit</h3>
        <p> Prix location/jour :</p>
            <div class="couleur_produit">
                <p>Couleur : </p>
                     <ul id="color">
                          <li class="choisir_couleur">
                              <img src="" alt="noir">
                          </li>
                          <li class="choisir_couleur">
                              <img src="" alt="bleu">
                          </li>
                      </ul>
            </div>
            
            <div class="taille_produit">
                <p>Taille :</p>
                    <div>
                        <a href="">Guide des tailles</a>
                    </div>
                    <div>
                        <select class="select_taille" id="size">
                                <option value="102378">M</option>
                                <option value="102379">L</option>
                        </select>
                    </div>
                    <div class="panier">
                        <button type="button">Ajouter au panier</button>
                    </div>
            </div>
                       

<?php

$content = ob_get_clean();

require 'template.php';