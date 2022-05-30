<?php


ob_start();

?>

    <div class="conteneur_avis">
        <div class="avis"> 
            <form method="post" action="">
                <label for="chk" aria-hidden="true">Dites-nous tout !</label>
                <label for="nom"></label>
                <input type="text" name="nom" placeholder="Nom" required=""> 
                <label for="prenom"></label>
                <input type="text" name="prenom" placeholder="Prénom" required=""> 
                <label for="avis"></label>
                <textarea  type="text" name="avis"placeholder="Ce que vous pensez de Loca'rando..." required=""></textarea>
                <button>Valider</button>
            </form>
        </div>
    </div>

<?php
    if(isset($liste_avis)) {
        while ($avis=$liste_avis->fetch()) {
            echo '
            <div class="avis">
                <h2>'.$avis['nom'].' '.$avis['prenom'].'</h2>
                
                <p>'.$avis['avis'].'</p>
            </div>';
                    
        }
    }

$content=ob_get_clean(); 
$title = ' Dites nous tout !';
require 'template.php';