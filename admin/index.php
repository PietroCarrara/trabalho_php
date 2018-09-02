<?php

require_once "../config.php";

requireAdmin();

require "../templates/header.php";

?>
	<h1>
		Bem vindo, <?=$_SESSION['user']->name?><br>
	</h1>

	<ul>
		<li><a href="/admin/add-produto.php">Adicionar um produto</a></li>
		<li><a href="/admin/add-admin.php">Transformar um usuário em admin</a></li>
		<li><a href="/admin/del-admin.php">Revocar Admin de um usuário</a></li>
	</ul>


<?php require "../templates/footer.php" ?>
