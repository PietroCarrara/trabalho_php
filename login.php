<?php

require_once "config.php";

dismissLogin();

require "templates/header.php";

?>

	<h1>
		Bem vindo ao sistema
	</h1>

	<form method="post" action="/login-post.php">
		Email: <input type="text" name="email">
		Senha: <input type="password" name="password">
		<input type="submit" value="Entrar">
	</form>

<?php require "templates/footer.php" ?>
