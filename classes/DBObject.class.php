<?php

class DBObject {

	// Array associativo
	protected $values = [];

	// Tipos das variáveis
	protected $types;

	protected $tableName;

	private $conn;

	private function __construct($id, $name, $email, $password, $isAdmin) {
		$this->values['id'] = $id;
		$this->values['name'] = $name;
		$this->values['email'] = $email;
		$this->values['password'] = $password;
		$this->values['isAdmin'] = $isAdmin;
	}

	public function connect($conn) {
		$this->conn = $conn;
	}

	public function __get($name) {
		return $this->values[$name];
	}

	public function __set($name, $value) {

		if ($name == 'id') throw new Exception("usuário: O campo 'id' é somente para leitura!");

		$query = $this->conn->prepare("UPDATE {$this->tableName} SET $name = ? WHERE id = ?");
		$query->bind_param($this->types[$name] . 'i', $value, $this->values['id']);
		$query->execute();
		$query->close();

		$this->values[$name] = $value;
	}
}

?>

