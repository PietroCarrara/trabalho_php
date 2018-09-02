<?php

require '../config.php';

requireLogin();

$produtos = $_SESSION['carrinho'];

require '../templates/header.php';

$cont = 0;

$total = 0;

?>

	<div class="row">

	<h3>Todos os produtos:</h3>

	<?php foreach ($produtos as $prod): ?>

        <div class="col s3">
          <div class="card large">
            <div class="card-image">
		  <a href="/produto/index.php?id=<?=$prod->id?>">
				<img src="<?= $prod->GetPath() ?>">
            </div>
            <div class="card-content">
				<span class="card-title black-text">
				<?php
					if (strlen($prod->nome) > 35) {
						echo substr($prod->nome, 0, 35) . '...';
					} else {
						echo $prod->nome;
					}
				?>
				</span>
              <p><?=number_format($prod->preco, 2, '.', '')?></p>
			  <p>
			  <?php
				if (strlen($prod->descricao) > 20) {
					echo substr($prod->descricao, 0, 20) . '...';
				} else {
					echo $prod->descricao;
				}
			  ?></p>
			</a>
            </div>
			<div class="card-action">
				<a class="waves-effect waves-light btn" href="/carrinho/del-post.php?cont=<?=$cont++?>">Remover</a>
			</div>
          </div>
        </div>

	<?php
		$total += $prod->preco;

		endforeach;
	?>

	</div>

	<h3>Total:</h3>
		<h4>R$<?=$total?></h4>

	<a class="btn waves-effect waves-light" href="/carrinho/checkout.php">Proceder!</a>

<?php

require '../templates/footer.php';

?>


