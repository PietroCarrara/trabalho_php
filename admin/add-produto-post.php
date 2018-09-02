<?php

require_once "../config.php";

requireAdmin();

$nome = $_REQUEST['nome'];
$preco = $_REQUEST['preco'];
$descricao = $_REQUEST['descricao'];

// Sanitize
$nome = filter_var($nome, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$descricao = filter_var($descricao, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

// Check for errors
if (!is_numeric($preco)) {
	$_SESSION['msg'] .= 'É necessário um valor numério válido para preço!';
	header('Location: /admin/add-produto.php');
	$conn->close();
	die();
}

if (!($nome && $descricao && $_FILES['foto'])) {
	$_SESSION['msg'] .= 'Todos os campos devem ser preenchidos de maneira válida!<br>' . "nome = $nome, descricao = $descricao";
	header('Location: /admin/add-produto.php');
	$conn->close();
	die();
}

$types = ['image/jpeg' => 'jpeg', 'image/png' => 'png'];
if (!array_key_exists($_FILES['foto']['type'], $types)) {
	$_SESSION['msg'] .= 'Arquivo de foto não foi reconhecido como imagem!';
	header('Location: /admin/add-produto.php');
	$conn->close();
	die();
}

$prod = Produto::Create($nome, $preco, $types[$_FILES['foto']['type']], $descricao, $conn);

if (!$prod) {
	$_SESSION['msg'] .= 'Ocorreu um erro inesperado durante a criação do produto!';
	header('Location: /admin/add-produto.php');
	$conn->close();
	die();
}


move_uploaded_file($_FILES['foto']['tmp_name'], "../imgs/$prod->id.{$types[$_FILES['foto']['type']]}");

$conn->close();

header('Location: /admin/add-produto.php');

?>

