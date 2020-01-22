<?php
	class Filme {
		private $pdo;

		public function __construct() {
			$this->pdo = new PDO("mysql:dbname=crud_filmes;host=localhost", "root", "");
		}

		public function todosFilmes() {
			$sql = "SELECT * FROM filmes";
			$sql = $this->pdo->query($sql);

			if ($sql->rowCount() > 0) {
				return $sql->fetchAll();
			} else {
				return array();
			}
		}

		public function existeFilme($nome) {
			$sql = "SELECT * FROM filmes WHERE nome = :nome";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				return true;
			} else {
				return false;
			}
		}

		public function getInfo($nome) {
			$sql = "SELECT * FROM filmes WHERE nome = :nome";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				return $sql->fetch();
			} else {
				return array();
			}
		}

		public function adicionar($nome) {
			if ($this->existeFilme($nome) == false) {
				$sql = "INSERT INTO filmes SET nome = :nome";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(':nome', $nome);
				$sql->execute();

				return true;
			} else {
				return false;
			}
		}

		public function editar($nome) {
			if ($this->existeFilme($nome) == false) {
				$sql = "UPDATE filmes SET nome = :nome WHERE nome = :nome";
				$$sql = $this->pdo->prepare($sql);
				$sql->bindValue(':nome', $nome);
				$sql->execute();

				return true;
			} else {
				return false;
			}
		}

		public function excluir($nome) {
			if ($this->existeFilme($nome)) {
				$sql = "DELETE FROM filmes WHERE nome = :nome";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(':nome', $nome);
				$sql->execute();

				return true;
			} else {
				return false;
			}
		}
	}
?>