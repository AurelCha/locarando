<?php
$title = '';

ob_start();

?>
        <div class="intro">
            <p> Envie d'évasion en pleine nature en étant éco-responsable?</p>
            <p> La location de matériel est la solution</p>
            <p> C'est le moment de vous équipez !</p>
        </div>
        <div class="categories">
            <button type="button" id="equipement">Equipement</button>
            <button type="button" id="couchage">Couchage</button>
            <button type="button" id="mobilier">Mobilier</button>
            <button type="button" id="cuisine">Cuisine</button>
            <button type="button" id="hydratation">Hydratation</button>
            <button type="button"id="hygiene">Hygiène</button>
        </div>
        
        <div class="categorie_produit" id="equipement_produit">
            <div class="flex">
                <div>
                    <a href="index.php?page=produit">
                    <img src="public/images/categories/equipement/sac_rando_50L.jpg" alt="">Sacs à dos</a>
                </div>
                <div>
                    <a href="index.php?page=produit">
                     <img src="public/images/categories/equipement/batons_randonnee_homme.jpg" alt="">Batons</a>
                </div>
            </div>
        </div>   
        <div class="categorie_produit" id="couchage_produit">
            <div class="flex">
                <div>
                    <a href="index.php?page=produit">
                    <img src="public/images/categories/couchage/matelas_vue.jpg" alt="">Matelas</a>
                </div>
                <div>
                    <a href="index.php?page=produit">
                    <img src="public/images/categories/couchage/tente1place.jpg" alt="">Tentes</a>
                </div>
            </div>
        </div>   
        <div class="categorie_produit" id="mobilier_produit">
             <div class="flex">
                <div>
                    <a href="index.php?page=produit">
                    <img src="public/images/categories/mobilier/chaise_01.jpg" alt="">Chaises</a>
                </div>
                <div>
                    <a href="index.php?page=produit">
                    <img src="public/images/categories/mobilier/table_camping01.jpg" alt="">Tables</a>
                </div>
            </div>
        </div>   
        <div class="articles">
            <div class="un">
                <h4>Les GR en France</h4>
                <p> Où que vous soyez en France, il y a forcement un GR près de chez vous !</p>
                <a href="https://www.ffrandonnee.fr"> Site de la Fédération Française de Randonnée</a>
            </div>
            <div class="deux">
                <h4> Focus GR20</h4> 
                <p> Vous revez de vous lancer à l'assaut du GR20 ? Retrouver <a href="https://gr20-infos.com">ici</a> tous les conseils sur les étapes pour vous préparer à cette aventure</p>
                <a href="https://gr20-infos.com">GR20-infos</a>
            </div>
            <div class="trois"> </div>
        </div>
       
        
<?php

$content = ob_get_clean();

require 'template.php';