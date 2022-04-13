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
	<tr><td><input type="email" name="Mail" value="..." size="25" maxlength="64"></td>	
		<td><input type="password" name="Mdp" value="" size="25" maxlength="25"></td></tr>
		<tr><td colspan=2></td></tr>
	<tr><td><input type="submit" name="Envoi" value="Connexion..."></td><td><input type="reset" name="reset" value="Ré-initialisation"></td</tr>
	
	</table>
    </fieldset>
</form>
</body>

</html>
