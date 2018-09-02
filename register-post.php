<?php

require_once "config.php";

dismissLogin();

$email = filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL);
$name = filter_var($_REQUEST['username'], FILTER_SANITIZE_STRING);
$pass = filter_var($_REQUEST['password'], FILTER_SANITIZE_STRING);

if (!($email && $name && $pass)) {
	if (!$email) {
		$_SESSION['msg'] .= "Email inválido<br>";
	}
	if (!$name) {
		$_SESSION['msg'] .= "Nome inválido!<br>";
	}
	if (!$pass) {
		$_SESSION['msg'] .= "Sua senha contém caracteres inválidos!<br>";
	}
	$conn->close();
	header('Location: /register.php');
	die();
}

$query = $conn->prepare('SELECT * FROM users WHERE email = ?');
$query->bind_param("s", $email);
$query->execute();
$query->store_result();
$res_count = $query->num_rows;
$query->close();

// Email já usado
if ($res_count > 0) {
	$_SESSION['msg'] .= "Usuário já está em uso!<br>";
	$conn->close();
	header('Location: /register.php');
	die();
}

$pass_hash = password_hash($pass, PASSWORD_DEFAULT);

$user = User::Create($name, $email, $pass_hash, false, $conn);

$_SESSION['user'] = $user;

$conn->close();

header('Location: /index.php');
?>
