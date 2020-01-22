<?php
	require 'filmes.class.php';
	$filme = new Filme();

	if (!empty($_GET['nome'])) {
		$nome = $_GET['nome'];

		$filme->excluir($nome);
	}

	header("Location: index.php");
?>