<?php

require '../config.php';

requireLogin();

if (!isset($_REQUEST['id'])) {
	header('Location: /');
	die();
}

$id = $_REQUEST['id'];

$produto = Produto::FromID($id, $conn);
if (produto != NULL) {

	$_SESSION['carrinho'][] = $produto;

}

header("Location: /produto/index.php?id=$id");
$_SESSION['msg'] .= 'Item adicionado no carrinho!\n';
?>
