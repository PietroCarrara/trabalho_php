<?php

require '../config.php';

if (!isset($_GET['id'])) {
	header('Location: /');
	die();
}

$produto = Produto::FromID($_GET['id'], $conn);
if ($produto == NULL) {
	header('Location: /');
	die();
}

require '../templates/header.php';

?>

<h2> <?=$produto->nome?> </h2>

<div class="row">
	
	<div class="col s6">
		<img class="responsive-img" src="<?=$produto->GetPath()?>">
	</div>	

	<div class="col s6">
		<h4>Descrição:</h4>
		<p><?=$produto->descricao?></p>
		
		<h4>Preço:</h4>
		<h5>R$<?=number_format($produto->preco, 2, '.', '')?></h5>

		<a class="waves-effect waves-light btn" href="/carrinho/add-post.php?id=<?=$produto->id?>">Comprar</a>

	</div>

</div>

<?php

require '../templates/footer.php';

?>
