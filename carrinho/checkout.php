<?php

require '../config.php';

requireLogin();

if (count($_SESSION['carrinho']) <= 0) {
	header('Location: /');
	die();
}

$total = 0;

$corpo = "

Olá {$_SESSION['user']->name},

Você acaba de adiquirir os seguintes produtos:

";

foreach($_SESSION['carrinho'] as $prod) {
	$corpo .= $prod->nome . "\n";
	$total += $prod->preco;
}

$corpo .= "

Total: R\$$total

Nós da LaSoleil ficamos muito gratos pela compra!
";


mail($_SESSION['user']->email, "Obrigado pela sua compra, {$_SESSION['user']->name}!", $corpo, 'From: naoresponda@lasoleil.com');

# Pra ver o email + ou -
# echo '<pre> ' . $corpo . ' </pre>';

header('Location: /');
$_SESSION['carrinho'] = [];
$_SESSION['msg'] .= 'Compra concluída!';

?>

