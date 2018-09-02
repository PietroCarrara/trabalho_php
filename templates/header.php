<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" >

<title>La Soleil - Confeitaria</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

</head>

<body>

	<nav>
		<div class="nav-wrapper">
			<a href="/index.php" class="brand-logo">La Soleil</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="/produto/all.php">Produtos</a></li>
				<?php if (isLogged()): ?>
					<?php if ($_SESSION['user']->is_admin): ?>
						<li><a href="/admin/index.php">Painel do Admin</a></li>
					<?php endif ?>
					<li><a href="/carrinho/index.php">Carrinho</a></li>
					<li><a href="/logout.php">Sair</a></li>
				<?php else: ?>
					<li><a href="/login.php">Login</a></li>
					<li><a href="/register.php">Registrar</a></li>
				<?php endif ?>
			</ul>
		</div>
	</nav>

	<div class="container">
