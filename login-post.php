<?php

require_once "config.php";

dismissLogin();

$email = $_REQUEST['email'];
$pass = $_REQUEST['password'];

$user = User::FromEmail($email, $conn);

// Achou
if ($user) {

	// Acertou a senha
	if (password_verify($pass, $user->password)) {
		$_SESSION['user'] = $user;
		header('Location: /user/index.php');
	} else {
		$_SESSION['msg'] .= 'Errou a senha!<br>';
		header('Location: index.php');
	}
} else {
	$_SESSION['msg'] .= 'Conta não existe com esse email!<br>';
	header('Location: /login.php');
}

$query->close();
$conn->close();
?>

