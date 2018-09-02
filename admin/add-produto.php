<?php

require_once "../config.php";

requireAdmin();

require "../templates/header.php";

?>

<h1>
	Adicionar Produto
</h1>

<div grid="column">
	<form method="post" enctype="multipart/form-data" action="/admin/add-produto-post.php">
		<div column>
			Nome: <input type="text" name="nome">
		</div>
		<div column>
			Preco: <input type="number" name="preco" step="0.01">
		</div>
		<div column>
			Foto: <br><input type="file" name="foto">
		</div>
		<div column>
			Descrição: <textarea name="descricao"></textarea>
		</div>
		<div column>
			<input type="submit" value="Adicionar">
		</div>
	</form>
</div>

<?php require "../templates/footer.php" ?>
