<?php
require_once "config.php";

dismissLogin();

require "templates/header.php";
?>
	<h1>
		Crie tua conta aqui!
	</h1>

	<form method="post" action="/register-post.php">
		Email: <input type="text" name="email">
		Nome: <input type="text" name="username">
		Senha: <input type="password" name="password">
		<input type="submit" value="Criar">
	</form>

<?php require "templates/footer.php" ?>
