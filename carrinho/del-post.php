<?php

require '../config.php';

requireLogin();

$cont = -1;
if (isset($_REQUEST['cont'])) {
	$cont = $_REQUEST['cont'];
} else {
	header('Location: /carrinho/index.php');
	die();
}

if (array_key_exists($cont, $_SESSION['carrinho'])) {
	array_splice($_SESSION['carrinho'], $cont, 1);
}

header('Location: /carrinho/index.php');

?>

