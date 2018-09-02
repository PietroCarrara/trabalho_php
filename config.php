<?php

// Mostar erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Conexão bd
$_user = "pietro";
$_pass = "123123";
$_database = "aula_php";

$conn = new mysqli("localhost", $_user, $_pass, $_database);

// Classes
require_once __DIR__ . "/classes/DBObject.class.php";
require_once __DIR__ . "/classes/User.class.php";
require_once __DIR__ . "/classes/Produto.class.php";

if ($conn->connect_errno) {
    echo "Vish meu filho, deu ruim: " . $conn->connect_error;
	die();
}

// Sessão
session_start();

// Inicializar as mensagens
if (!isset($_SESSION['msg'])) {
	$_SESSION['msg'] = "";
}

// Inicializar o carrinho
if (!isset($_SESSION['carrinho'])) {
	$_SESSION['carrinho'] = [];
}

// Atualizar usuário
if (isset($_SESSION['user'])) {
	$_SESSION['user'] = User::FromID($_SESSION['user']->id, $conn);
}

// Ver se o sistema não tem nenhum admin,
// e se não tiver, criar um padrão
if (User::CountAdmins($conn) <= 0) {
	$name = "root";
	$email = "root@root.com";
	$pass = "root";

	$pass_hash = password_hash($pass, PASSWORD_DEFAULT);

	User::Create($name, $email, $pass_hash, 1, $conn);
}

function isLogged() {
	return isset($_SESSION['user']);
}

function requireLogin() {
	if (!isLogged()) {
		header('Location: /login.php');
		die();
	}
}

function dismissLogin() {
	if (isLogged()) {
		header('Location: /user/index.php');
		die();
	}
}

function requireAdmin() {
	requireLogin();

	if (!($_SESSION['user']->is_admin)) {
		$_SESSION['msg'] .= 'Você deve ser um administrador para realizar esta ação!';
		header('Location: /user/index.php');
		die();
	}
}

