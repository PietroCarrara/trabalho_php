<?php

require_once "config.php";

// dismissLogin();

require "templates/header.php";

?>

	<h1>
		Vitrine de Destaque:
	</h1>

	<div class="row">

	<?php foreach (Produto::GetFirstN(6, $conn) as $prod): ?>

        <div class="col s4">
          <div class="card small">
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

	<div class="col s3 offset-6 text-center">
		<h3><a href="/produto/all.php">Ver Tudo...</a></h3>
	</div>

<?php require "templates/footer.php" ?>
