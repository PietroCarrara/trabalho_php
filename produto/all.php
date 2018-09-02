<?php

require '../config.php';

$produtos = Produto::FindAll($conn);

require '../templates/header.php';

?>

	<div class="row">

	<h3>Todos os produtos:</h3>

	<?php foreach ($produtos as $prod): ?>

        <div class="col s3">
          <div class="card large">
		  <a href="/produto/index.php?id=<?=$prod->id?>">
            <div class="card-image">
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
              <p>R$<?=number_format($prod->preco, 2, '.', '')?></p>
			  <p>
			  <?php
				if (strlen($prod->descricao) > 20) {
					echo substr($prod->descricao, 0, 20) . '...';
				} else {
					echo $prod->descricao;
				}
			  ?></p>
            </div>
			</a>
          </div>
        </div>

	<?php endforeach ?>

	</div>

<?php

require '../templates/footer.php';

?>

