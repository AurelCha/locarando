<?php    
$title = ' Connectez-vous !';

ob_start();

?>

    
    <div class="conteneur">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="creation">
				<form method="post" action="">
					<label for="chk" aria-hidden="true">Créer un compte</label>
					<input type="text" name="nom" placeholder="Nom" required="">
                    <input type="text" name="prenom" placeholder="Prénom" required="">
					<input type="text" name="mail" placeholder="Email" required="">
					<input type="password" name="psw" placeholder="Mot de passe">
					<button>Valider</button>
				</form>
			</div>
			<div class="login">
				<form method="post" action="">
					<label for="chk" aria-hidden="true">Se connecter</label>
					<input type="email" name="mail" placeholder="Email" required="">
					<input type="password" name="psw" placeholder="Mot de passe" required="">
					<button>Se connecter</button>
				</form>
			</div>
	</div>
<?php
$content = ob_get_clean();
require 'template.php';