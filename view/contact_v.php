<?php

$title = 'Une question ? Contactez - nous !';
ob_start();

?>
    <div class="conteneur1">
        <div class="contact">
            <h2>Formulaire de contact</h2>
            <form action="" method="">
                <label for="user_name"></label>
                <input type="text" id="user_name" name="user_name"  placeholder="Nom" required="">
                <label for="user_mail"></label>
                <input type="text" id="user_mail" name="user_mail"  placeholder="Mail"required="">
                <label for="user_tel"></label>
                <input type="text" id="user_tel" name="user_tel"  placeholder="Téléphone"required=""> 
                <label for="user_msg"></label>
                <textarea rows="8" id="user_msg" name="user_msg"  placeholder="Votre message"required=""></textarea>
                <button>Valider</button>
            </form>
        </div>
    </div>

<?php

$content = ob_get_clean();

require 'template.php';