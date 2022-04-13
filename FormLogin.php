<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>Formulaire de Login</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
<form method="post" action="Login.php">
    <fieldset>
    <legend>Formulaire de Login</legend>
	<input type="hidden" name="Tstamp" value="<?php time(); ?>">
    <table border=0><tr><th>Votre adresse mail</th><th>Votre mot de passe</th></tr>
	<tr><td><input type="email" name="Mail" value="..." size="25" maxlength="64" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" required></td>	
		<td><input type="password" name="Mdp" value="" size="25" maxlength="25" pattern="(^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,25})$)" required></td></tr>
		<tr><td colspan=2></td></tr>
	<tr><td><input type="submit" name="Envoi" value="Connexion..."></td><td><input type="reset" name="reset" value="Ré-initialisation"></td</tr>
	<tr><td>Si vous n'avez pas de compte, vous pouvez le faire içi --></td><td><input type="submit" name="Inscription" value="Création d'un compte"></td></tr>
	
	</table>
    </fieldset>
</form>
</body>

</html>
