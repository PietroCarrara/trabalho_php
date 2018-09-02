<?php

class User extends DBObject {

	private function __construct($id, $name, $email, $password, $isAdmin) {
		$this->values['id'] = $id;
		$this->values['name'] = $name;
		$this->values['email'] = $email;
		$this->values['password'] = $password;
		$this->values['is_admin'] = $isAdmin;

		$this->tableName = 'users';

		$this->types = [
			'id' => 'i',
			'name' => 's',
			'email' => 's',
			'password' => 's',
			'is_admin' => 'i',
		];
	}

	public static function FromEmail($name, mysqli $conn) {
		$query = $conn->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
		$query->bind_param("s", $name);
		$query->execute();

		$res = $query->get_result();

		$query->close();

		if ($usuario = $res->fetch_assoc()) {
			return new User(
				$usuario['id'],
				$usuario['name'],
				$usuario['email'],
				$usuario['password'],
				$usuario['is_admin']
			);
		}

		return NULL;
	}

	public static function FromID($id, mysqli $conn) {
		$query = $conn->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");
		$query->bind_param("i", $id);
		$query->execute();

		$res = $query->get_result();

		$query->close();

		if ($usuario = $res->fetch_assoc()) {
			return new User(
				$usuario['id'],
				$usuario['name'],
				$usuario['email'],
				$usuario['password'],
				$usuario['is_admin']
			);
		}

		return NULL;
	}

	public static function Create($name, $email, $password, $isAdmin, mysqli $conn) {

		$query = $conn->prepare('INSERT INTO users (name, email, password, is_admin) VALUES (?,?,?,?)');
		$query->bind_param("sssi", $name, $email, $password, $isAdmin);
		$query->execute();
		$query->close();

		return new User(
			$conn->insert_id,
			$name,
			$email,
			$password,
			$isAdmin
		);
	}

	public static function FindByName($name, mysqli $conn) {
		$query = $conn->prepare("SELECT * FROM users WHERE LOWER(name) LIKE LOWER(?)");
		$name = '%' . $name . '%';
		$query->bind_param("s", $name);
		$query->execute();

		$res = $query->get_result();

		$query->close();

		$result = [];

		while ($usuario = $res->fetch_assoc()) {
			$result[] = new User(
				$usuario['id'],
				$usuario['name'],
				$usuario['email'],
				$usuario['password'],
				$usuario['is_admin']
			);
		}

		return $result;
	}

	// Função bem específica, eu sei...
	public static function CountAdmins($conn) {

		$res = $conn->query('SELECT COUNT(*) FROM users WHERE is_admin');

		return $res->fetch_row()[0];
	}
}

?>
