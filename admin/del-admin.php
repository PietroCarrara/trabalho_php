<?php

require_once "../config.php";

requireAdmin();

require "../templates/header.php";

?>

	<h3>Adicionar Admin</h3>
	<form>
		<div>
			Nome: <input type="text" name="nome">
		</div>
		<div column>
			<input type="submit" value="Procurar">
		</div>
	</form>

<?php

	if (isset($_GET['nome'])):

		$users = User::FindByName($_GET['nome'], $conn);
		foreach ($users as $user):

			if (!$user->is_admin) {
				continue;
			}
?>
	
			<p><?=$user->name?> <a href="/admin/del-admin-post.php?id=<?=$user->id?>">Revocar Admin</a></p>		

<?php
		endforeach;
	endif;
?>

<?php require "../templates/footer.php" ?>

