<?php

class Produto extends DBObject {

	private function __construct($id, $nome, $preco, $extensao, $descricao) {

		$this->values['id'] = $id;
		$this->values['nome'] = $nome;
		$this->values['preco'] = $preco;
		$this->values['extensao'] = $extensao;
		$this->values['descricao'] = $descricao;

		$this->tableName = 'produto';

		$this->types = [
			'id' => 'i',
			'nome' => 's',
			'preco' => 'd',
			'extensao' => 's',
			'descricao' => 's',
		];
	}

	public static function FindAll($conn) {
		$query = $conn->prepare("SELECT * FROM produto ORDER BY id DESC");
		$query->execute();

		$res = $query->get_result();

		$query->close();

		$resultado = [];

		while ($prod = $res->fetch_assoc()) {
			$resultado[] = new Produto(
				$prod['id'],
				$prod['nome'],
				$prod['preco'],
				$prod['extensao'],
				$prod['descricao']
			);
		}

		return $resultado;
	}

	public static function FromID($id, $conn) {
		
		$query = $conn->prepare("SELECT * FROM produto WHERE id = ? LIMIT 1");
		$query->bind_param("i", $id);

		$query->execute();

		$res = $query->get_result();

		$query->close();

		if ($prod = $res->fetch_assoc()) {
			return new Produto(
				$prod['id'],
				$prod['nome'],
				$prod['preco'],
				$prod['extensao'],
				$prod['descricao']
			);
		}

		return NULL;
	}

	public static function Create($nome, $preco, $extensao, $descricao, mysqli $conn) {

		$query = $conn->prepare("INSERT INTO produto (nome,preco,extensao,descricao) VALUES (?,?,?,?)");

		$query->bind_param("sdss", $nome, $preco, $extensao, $descricao);
		$query->execute();
		$query->close();
		
		return new Produto(
			$conn->insert_id,
			$nome,
			$preco,
			$extensao,
			$descricao
		);
	}

	public static function GetFirstN($n, mysqli $conn) {

		$result = [];

		$sql = 'SELECT * FROM produto ORDER BY id DESC';

		if ($n > 0) {
			$sql .= " LIMIT $n";
		}

		$res = $conn->query($sql);

		while ($prod = $res->fetch_assoc()) {
			$result[] = new Produto(
				$prod['id'],
				$prod['nome'],
				$prod['preco'],
				$prod['extensao'],
				$prod['descricao']
			);
		}

		return $result;
	}

	public function GetPath() {
		return "/imgs/$this->id.$this->extensao";
	}
}

?>
