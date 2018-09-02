<?php

require_once "../config.php";

requireAdmin();

$id = $_REQUEST['id'];

if ($id <= 0) {
	header('Location: /');
	die();
}

$user = User::FromID($id, $conn);

if ($user != NULL) {

	$user->connect($conn);

	$user->is_admin = 0;
}

header('Location: /admin/del-admin.php');
?>


